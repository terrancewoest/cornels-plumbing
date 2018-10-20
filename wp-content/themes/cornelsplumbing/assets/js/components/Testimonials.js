import googleMapsClient from '@google/maps';

let Testimonials = {

    testimonailsWrapper: null,
    placeId: null,
    addReviewUrl: 'https://search.google.com/local/writereview?placeid={placeId}',

    /**
     * Initializes the object.
     */
    init() {

        // Only run this file if the testimonials block is on the page.
        this.testimonailsWrapper = $('[data-testimonials]');
        if (!this.testimonailsWrapper.length || !this.testimonailsWrapper.data('build')) {
            return;
        }

        // Set the needed attributes on the object.
        this.placeId = $('meta[name=place-id]').attr('content');
        this.addReviewUrl = this.addReviewUrl.replace('{placeId}', this.placeId);

        // Construct the review.
        this.getTestimonials()
            .then(testimonials => {
                // Create the needed html.
                let html = this.createReviewsHtml(testimonials);

                // Insert it into the testimonials dom element.
                this.testimonailsWrapper.html(html);
            });
    },

    /**
     * Gets the testimonials.
     */
    getTestimonials() {
        return new Promise((resolve, reject) => {

            // Otherwise get from the api and cache.
            let apiTestimonials = this.getTestimonialsFromGoogle(resolve)
                .then( testimonials => {
                    this.cacheTestimonials(testimonials);
                    resolve(testimonials);
                });
        });
    },

    /**
     * Gets the testimonials from the google api.
     */
    getTestimonialsFromGoogle() {

        // Return a promise.
        return new Promise((resolve, reject) => {
            // Get the places service.
            let map = new google.maps.Map(document.getElementById('map-hook'));
            let placeService = new google.maps.places.PlacesService(map);

            // Get the reviews and set them up in the dom.
            placeService.getDetails({
                placeId: this.placeId,
                fields: ['reviews', 'url'],
            }, (place, status) => {

                // Adapt it to only the data we need.
                let reviewData = [];
                $.each(place.reviews, (index, review) => {
                    reviewData.push({
                        profile_photo_url: review.profile_photo_url,
                        author_name: review.author_name,
                        rating: review.rating,
                        relative_time_description: review.relative_time_description,
                        text: review.text,
                    });
                });

                resolve(reviewData);
            });

        });
    },

    /**
     * Sends the testimonial data to the server to be cached.
     */
    cacheTestimonials(testimonials) {
        $.post(CP_Global.ajaxUrl, {
            action: 'cache_testimonials',
            testimonials: testimonials,
        });
    },

    /**
     * Handles taking the review data and constructing
     * the html for the testimonials section.
     */
    createReviewsHtml(reviews) {
        let out = '';
        let count = 1;
        let template = this.reviewTemplate();

        reviews.forEach(data => {
            // Insert all of the values from the template.
            let reviewHtml = template
                .replace('{image}', data.profile_photo_url)
                .replace('{name}', data.author_name)
                .replace('{count}', data.rating)
                .replace('{time}', data.relative_time_description)
                .replace('{text}', data.text);

            // Open a row if needed.
            if (count === 1 || count === 4) {
                reviewHtml = '<div class="row">' + reviewHtml;
            }

            // Close a row if needed.
            if (count === 3) {
                reviewHtml = reviewHtml + '</div>';
            }

            out = out + reviewHtml;
            count++;
        });

        // We fill up the last spot with an add review card.
        let addReviewCard = [
            '<div class="col-sm-6 col-md-4 mb-4">',
                '<div class="card card-shadow card-action color-secondary">',
                    '<a href="' + this.addReviewUrl + '" target="_blank" class="card-body">',
                        '<div class="card-icon"><i class="fas fa-plus"></i></div>',
                        '<h4 class="card-title">Add your review</h4>',
                        '<p class="card-text">At the end of the day, it\'s happy customers that keep us in business. Tell us how we did!</p>',
                    '</a>',
                '</div>',
            '</div>',
        ].join('');

        // Add the final add review card and close the last row.
        return out + addReviewCard + '</div>';
    },

    /**
     * Returns the html template needed for the review.
     */
    reviewTemplate() {
        return [
            '<div class="col-sm-6 col-md-4">',
                '<div class="card card-shadow card-testimonial">',
                    '<div class="card-body">',
                        '<div class="row no-gutters mb-3">',
                            '<div class="col-auto pr-3">',
                                '<img class="rounded-circle card-image" src="{image}">',
                            '</div>',
                            '<div class="col">',
                                '<h5 class="card-title mb-1">{name}</h5>',
                                '<span class="stars stars-{count}"><span class="rating"></span></span>',
                            '</div>',
                        '</div>',
                        '<p class="card-subtitle mb-1 text-muted">Posted {time}</p>',
                        '<p class="card-text">{text}</p>',
                    '</div>',
                '</div>',
            '</div>',
        ].join('');
    },

};

export default Testimonials;