<?php namespace JF;
/**

Copyright 2017 JQueryForm.com
License: http://www.jqueryform.com/license.php

FormID:  jqueryform-b69e5d
Date:    2017-10-19 09:39:24
Version: v2.0.3
Generated by http://www.jqueryform.com

PHP 5.3+ is required.
If mailgun is used AND the form has file upload field, PHP 5.5+ is required.

*/

class Config {
	private static $config;

    public static function getConfig( $decode = true ){
    	self::$config = self::_getConfig( $decode );
    	self::overwriteConfig();
    	return self::$config;
    }

    private static function _getConfig( $decode = true ){
        ob_start();
        // ---------------------------------------------------------------------
        // JSON format config
        // Note: please make a copy before you edit config manually
        // ---------------------------------------------------------------------

/**JSON_START**/ ?>
{
    "formId": "jqueryform-b69e5d",
    "email": {
        "to": "support@pettycash.com.ng",
        "cc": "",
        "bcc": "",
        "subject": "PETTYCASH APPLICATION",
        "template": ""
    },
    "admin": {
        "users": "admin:640d4",
        "dataDelivery": "emailAndFile",
        "save2dbExample": true
    },
    "thankyou": {
        "url": "http:\/\/www.pettycash.com.ng",
        "message": "YOUR APPLICATION HAS BEEN SENT. WE WILL GET BACK TO YOU SOON",
        "seconds": "10"
    },
    "seo": {
        "trackerId": "",
        "title": "",
        "description": "",
        "keywords": "",
        "author": ""
    },
    "mailer": "local",
    "smtp": {
        "host": "",
        "user": "",
        "password": ""
    },
    "mailgun": {
        "domain": "",
        "apiKey": "",
        "fromEmail": "",
        "fromName": ""
    },
    "styles": {
        "iCheck": {
            "enabled": true,
            "skin": "flat",
            "colorScheme": "black"
        },
        "Select2": {
            "enabled": true
        }
    },
    "logics": [

    ],
    "fields": [
        {
            "label": "Title",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "validators": {
                    "required": {
                        "enabled": true
                    }
                },
                "placeholder": "Mr\/Mrs"
            },
            "id": "f4",
            "cid": "c25"
        },
        {
            "label": "Full Name",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f5",
            "cid": "c30"
        },
        {
            "label": "Work Email",
            "field_type": "email",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "sender": false,
                "validators": {
                    "email": {
                        "enabled": true
                    },
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f7",
            "cid": "c40"
        },
        {
            "label": "Personal Email",
            "field_type": "email",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "sender": false,
                "validators": {
                    "email": {
                        "enabled": true
                    },
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f8",
            "cid": "c45"
        },
        {
            "label": "Date of Birth",
            "field_type": "date",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "addon": {
                    "rightIcon": "glyphicon glyphicon-th",
                    "rightText": ""
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f9",
            "cid": "c50"
        },
        {
            "label": "Gender",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f10",
            "cid": "c55"
        },
        {
            "label": "Residential Address",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f12",
            "cid": "c65"
        },
        {
            "label": "Company Name",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f13",
            "cid": "c70"
        },
        {
            "label": "Company Address",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f14",
            "cid": "c75"
        },
        {
            "label": "Monthly Salary",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f16",
            "cid": "c85"
        },
        {
            "label": "Phone Number",
            "field_type": "number",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "numSpinner": {
                    "enabled": false
                },
                "validators": {
                    "number": {
                        "enabled": true
                    },
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f18",
            "cid": "c95"
        },
        {
            "label": "State of Employment",
            "field_type": "dropdown",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "options": [
                    {
                        "label": "- Select -",
                        "value": "#novalue",
                        "checked": false
                    },
                    {
                        "label": "Lagos",
                        "checked": false
                    },
                    {
                        "label": "Abuja",
                        "checked": false
                    },
                    {
                        "label": "Port-Harcourt",
                        "checked": false
                    },
                    {
                        "label": "Ibadan",
                        "value": null,
                        "checked": null
                    }
                ],
                "include_blank_option": false,
                "validators": {
                    "minlength": {
                        "msg": "Please select at least {0} option(s)",
                        "enabled": false
                    },
                    "maxlength": {
                        "msg": "Please select no more than {0} option(s)",
                        "enabled": false
                    },
                    "required": {
                        "enabled": true
                    }
                },
                "presetJson": "",
                "multiple": false
            },
            "id": "f19",
            "cid": "c100"
        },
        {
            "label": "Marital Status",
            "field_type": "dropdown",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "options": [
                    {
                        "label": "- Select -",
                        "value": "#novalue",
                        "checked": false
                    },
                    {
                        "label": "Single",
                        "checked": false
                    },
                    {
                        "label": "Married",
                        "checked": false
                    },
                    {
                        "label": "Divorced",
                        "checked": false
                    }
                ],
                "include_blank_option": false,
                "validators": {
                    "minlength": {
                        "msg": "Please select at least {0} option(s)",
                        "enabled": false
                    },
                    "maxlength": {
                        "msg": "Please select no more than {0} option(s)",
                        "enabled": false
                    },
                    "required": {
                        "enabled": true
                    }
                },
                "presetJson": "",
                "multiple": false
            },
            "id": "f20",
            "cid": "c106"
        },
        {
            "label": "Employment Status",
            "field_type": "dropdown",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "options": [
                    {
                        "label": "- Select -",
                        "value": "#novalue",
                        "checked": false
                    },
                    {
                        "label": "Self-Employed",
                        "checked": false
                    },
                    {
                        "label": "Full Staff(Private)",
                        "checked": false
                    },
                    {
                        "label": "Full Staff(Government)",
                        "checked": false
                    }
                ],
                "include_blank_option": false,
                "validators": {
                    "minlength": {
                        "msg": "Please select at least {0} option(s)",
                        "enabled": false
                    },
                    "maxlength": {
                        "msg": "Please select no more than {0} option(s)",
                        "enabled": false
                    },
                    "required": {
                        "enabled": true
                    }
                },
                "presetJson": "",
                "multiple": false
            },
            "id": "f21",
            "cid": "c111"
        },
        {
            "label": "Amount to invest",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f29",
            "cid": "c95"
        },
        {
            "label": "Repayment Tenor",
            "field_type": "dropdown",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "options": [
                    {
                        "label": "- Select -",
                        "value": "#novalue",
                        "checked": true
                    },
                    {
                        "label": "12 months",
                        "checked": true
                    }
                ],
                "include_blank_option": false,
                "validators": {
                    "minlength": {
                        "msg": "Please select at least {0} option(s)",
                        "enabled": false
                    },
                    "maxlength": {
                        "msg": "Please select no more than {0} option(s)",
                        "enabled": false
                    },
                    "required": {
                        "enabled": true
                    }
                },
                "presetJson": "",
                "multiple": false
            },
            "id": "f23",
            "cid": "c123"
        },
        {
            "label": "Account Name",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f24",
            "cid": "c128"
        },
        {
            "label": "Account Number",
            "field_type": "number",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "numSpinner": {
                    "enabled": false
                },
                "validators": {
                    "number": {
                        "enabled": true
                    },
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f26",
            "cid": "c138"
        },
        {
            "label": "Bank Name",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f27",
            "cid": "c143"
        },
        {
            "label": "Account Type",
            "field_type": "dropdown",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "options": [
                    {
                        "label": "- Select -",
                        "value": "#novalue",
                        "checked": false
                    },
                    {
                        "label": "Current Account",
                        "checked": false
                    },
                    {
                        "label": "Savings Account",
                        "checked": true
                    }
                ],
                "include_blank_option": false,
                "validators": {
                    "minlength": {
                        "msg": "Please select at least {0} option(s)",
                        "enabled": false
                    },
                    "maxlength": {
                        "msg": "Please select no more than {0} option(s)",
                        "enabled": false
                    },
                    "required": {
                        "enabled": true
                    }
                },
                "presetJson": "",
                "multiple": false
            },
            "id": "f28",
            "cid": "c148"
        },
        {
            "label": "Next of kin name",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f30",
            "cid": "c102"
        },
        {
            "label": "Relationship with next of kin",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f31",
            "cid": "c107"
        },
        {
            "label": "Phone number of next of kin",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f32",
            "cid": "c112"
        },
        {
            "label": "Submit Button",
            "field_type": "submit",
            "required": true,
            "field_options": {
                "page": {
                    "title": "Submit",
                    "labelPrev": "< Back",
                    "showPageNumnber": false,
                    "pageNumberText": "{page} \/ {total}"
                },
                "images": {
                    "urls": "",
                    "slideshow": false
                }
            },
            "labelHide": true,
            "submit": {
                "label": "",
                "icon": "",
                "checkRequiredFields": ""
            },
            "id": "f0",
            "cid": "c0"
        }
    ],
    "autoResponse": {
        "subject": "",
        "template": ""
    },
    "licenseKey": ""
}
<?php /**JSON_END**/

        $json = ob_get_clean() ;

        return $decode ? json_decode( trim($json), true ) : $json;
    } // end of getConfig()

    private static function getValue( $fieldId, $default = NULL ){
        return isset( $_POST[$fieldId] ) ? $_POST[$fieldId] : $default ;
    }

    private static function overwriteConfig(){
    	//self::get_to();
    }

    private static function get_to(){
    	$value = self::getValue( 'c25' );
    	$to = array(
    		'Option 1' => 'a@a.com',
    		'Option 2' => 'b@b.com',
    		'Option 3' => 'c@c.com',
    	);

    	if( isset( $to[$value] ) ){
    		self::$config['email']['to'] = $to[ $value ];
    	};
    }

} // end of Config class