# Kirby Facebook-Events Example Project

This is an example if the Kirby [FacebookEvents plugin](https://github.com/Andi-Lo/kirby-FacebookEvents). It uses Kirby starterkit v2.5.9.
If you have trouble setting the plugin up you can take this repository as a starting point for your own project.

## How to use this example project?

1. First clone this project into a directory that is called `FacebookEventsExample`

2. Then navigate to the folder `FacebookEventsExample/site/plugins/FacebookEvents/credentials/`. There you >>have to<< provide a valid Facebook API token. Get your token from Facebook like described [here](https://github.com/Andi-Lo/kirby-FacebookEvents#get-a-facebook-access-token).

3. Past the API token into the `access_token` property that you find in the `credentials.json` file. It should look something like this 
```json
{
    "access_token": "4567980uoihubh67....."
}
```
4. 