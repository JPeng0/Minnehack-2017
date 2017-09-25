# minnehack-2017
## Inspiration

The internet is providing an ever increasing capability to connect with interesting people all over the world. Unfortunately, many of the current solutions (e.g. Omegle, Chatroulette) run antiquated Flash platforms with little accountability for the actions of their users. This lack of accountability provides for rampant harassment throughout these online communities. Strangr allows for the positive aspects of connecting with the world through the internet while mitigating the risks of an accountability-free environment.

## What it does

Strangr randomly connects two people from anywhere in the world via a peer-to-peer video-based chat, but with a revolutionary twist – they must log in to the service using their Facebook account, which relays their first name to the other user. Adding just someone's first name as compared to anonymity has seen to add responsibility to services such as Tinder and customer support agencies throughout the world.

## How we built it

The core functionality of Strangr relies upon the open source WebRTC (RTC -> Real Time Communication) framework to provide video chat capabilities. The personalization and name-based accountability is provided by the Facebook Login and Graph APIs to log in and fetch names. Randomized connections are created through a custom Django app to randomize and store the chatroom names and exchange the names of the users, which are then fetched in stages by local JavaScript.

## Challenges we ran into

We encountered early difficulties with our initial hosting provider, AWS, due to the complexity of their Elastic Beanstalk service. Thus, we eventually transferred our project to an already running server to decrease startup complexity. Unfortunately, we did not have sudo privileges on that server, and had to run the dynamic Django aspect from a free droplet at DigitalOcean. These divisions proved difficult to manage as the project grew in complexity, but were conquered through constant communication. The most difficult aspect of the project was learning to deal with the asynchronous aspect of the Facebook JavaScript API, as hours were spent attempting to access an object that was not yet created despite its precedence in the same script tag.

## Accomplishments that we're proud of

None of us began this project with confidence in our ability to create a functional product with internet technologies. Yet, we finished with a working base that is both fun and available for future improvements.

## What we learned

Using services such as the Facebook APIs and WebRTC, we gained a greater understanding of how to use APIs and open source projects to accelerate and improve development.

## What's next for Strangr

Strangr's use of the Facebook API allows for a variety of meaningful matching between users. For example, they can be matched with other users based on mutual friends, likes, locations, etc. Furthermore, the Strangr platform is inherently flexible due to the multiplatorm nature of WebRTC, allowing for simple extension to mobile platforms (note that the current version already runs on compatible Android devices). A modern, accountable, and diverse video chatting platform of this type could change the way the world connects.

Note: approval as a tester for the Facebook component of the app is required for the full experience seen in the video demo. Contact us to be added as a tester.
