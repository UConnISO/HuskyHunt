
SocialEndpoints = {
    
    'TWITTER': {
        'NAME': 'Twitter',
        'BUTTON': 'Tweet!',
        'REDIRECT': BASE_URL + '/share/twitter.php'
    },

    'FACEBOOK': {
        'NAME': 'Facebook',
        'BUTTON': 'Post to Wall!',
        'REDIRECT': BASE_URL + '/share/facebook.php'
    }

}

HuskyHuntShareModal = {

    show: function(service) {
    
        service = service || undefined;

        if (service !== undefined) {

            service = service.toUpperCase();
            endpoint = SocialEndpoints[service];

            var button = $('#social-modal #share-button');         
            
            button.html(endpoint['BUTTON']);
            button.unbind('click');
            button.click(function() {
                window.location = endpoint['REDIRECT'];
            });

            var title = $('#social-modal .modal-title');

            title.html(sprintf('Share On %s!', endpoint['NAME']));

            $('#social-modal').modal('show');

        }

    }

}


