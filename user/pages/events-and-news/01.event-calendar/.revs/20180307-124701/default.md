---
display_title: 'Events Calendar'
description: 'Click on an event to see the details'
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

