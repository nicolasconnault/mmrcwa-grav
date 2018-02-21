---
title: Newsletter
description: 'To receive an occasional email with Event updates, please enter your email address below.'
visible: false
form:
    name: subscribe
    fields:
        -
            name: email
            label: Email
            placeholder: 'Enter your email address'
            type: email
            validate:
                required: true
        -
            name: news_letter
            type: checkbox
            label: 'Yes I would like to receive updates about upcoming events'
    buttons:
        -
            type: submit
            value: Subscribe
    process:
        -
            mailchimp:
                required_fields: [news_letter]
                lists: [1234567, abcdefg]
                field_mappings: { mailchimpMergeField: my_custom_field }
---

