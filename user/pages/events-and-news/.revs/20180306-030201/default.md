---
title: 'Events & News'
body_classes: text-center
sections:
    -
        text:
            - 'Below is a calendar showing all our scheduled events. Click on an event to view more information.'
            - 'If you''d like to be kept up to date with these events, you may want to [subscribe to our newsletter](/events/newsletter).'
widget:
    areas:
        -
            location: default
            widgets:
                - { load: /widgets/_calendar, enabled: true }
content:
    events:
        '@taxonomy':
            type: event
    order:
        by: date
        dir: asc
    limit: '0'
    pagination: false
---

