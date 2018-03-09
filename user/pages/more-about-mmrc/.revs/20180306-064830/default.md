---
title: 'More about MMRC'
media_order: more-about-mmrc.jpg
body_classes: text-center
description: 'For more information about the Metropolitan Migrant Resource Centre Inc please fill in the following form and we will respond as soon as possible.'
form:
    name: contact
    fields:
        -
            name: name
            label: Name
            placeholder: 'Enter your name'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: email
            label: Email
            placeholder: 'Enter your email address'
            type: email
            validate:
                required: true
        -
            name: message
            label: Message
            placeholder: 'Enter your message'
            type: textarea
            validate:
                required: true
        -
            name: g-recaptcha-response
            label: Captcha
            type: captcha
            recaptcha_site_key: 6LdyUjQUAAAAAKxvZSWA2gLxLBIZRtnEJht4qmFk
            recaptcha_not_validated: 'Captcha not valid!'
            validate:
                required: true
    buttons:
        -
            type: submit
            value: Submit
        -
            type: reset
            value: Reset
    process:
        -
            captcha:
                recaptcha_secret: 6LdyUjQUAAAAAEYjlMsa3iUl_esHTOG4Mw_Y8y5x
        -
            email:
                subject: '[Site Contact Form] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            save:
                fileprefix: contact-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: 'Thank you for getting in touch!'
        -
            display: thankyou
---

