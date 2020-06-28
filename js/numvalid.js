const phoneInput = document.querySelector("#phone");
        const iti =  window.intlTelInput(phoneInput, {
            utilsScript: "js/utils.js",
            initialCountry: "auto",
            geoIpLookup: function(success, failure) {
                $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    success(countryCode);
                }
            );
            },
        }
      );
phoneInput.addEventListener('input', function() {
        if (phoneInput.value.trim()) {
            if (iti.isValidNumber()) {
                this.style = "border-bottom: .3vh solid #ffc61a"
            } else if(!iti.isValidNumber()){
                this.style = "border-bottom: .3vh solid red"
            }
        }
    }
);