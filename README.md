#### Woongebouw Parkhaven Website

Simple website for the student building Parkhaven.

#### How To use
`npm run develop`: spin up a webpack dev
`npm run build`: builds a production ready version
`firebase deploy --only hosting:parkhaven-website`: deploys content of dist folder to server

#### Notes
Issue with Firebase and multiple sites per project: https://github.com/firebase/firebase-tools/issues/902
I fixed it inside my firebase.json and .firebaserc

Firebase version was: 6.3.0

#### Tools:
- Webpack 4
- Bootstrap 3.3.7 (will not upgrade)
- Hosted on Firebase Hosting
