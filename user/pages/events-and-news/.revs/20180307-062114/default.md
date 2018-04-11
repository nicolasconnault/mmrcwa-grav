---
title: 'Events & News'
body_classes: text-center
widget:
    areas:
        -
            location: default
            widgets:
                - { load: /widgets/_calendar, enabled: true }
sections:
    -
        text:
            - 'Below is a calendar showing all our scheduled events. Click on an event to view more information.'
            - 'If you''d like to be kept up to date with these events, you may want to [subscribe to our newsletter](/events/newsletter).'
        columns: 3
        sub_sections:
            -
                title: 'Calendar of Events'
                url: /events-and-news/events
                image: ssa.jpg
            -
                title: 'Latest News'
                url: /widgets/_calendar
                image: youth.jpg
            -
                title: Subscribe
                url: /events-and-news/subscribe
                image: youth.jpg
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

