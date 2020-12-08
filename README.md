# Dojo Search

⚠️ Read subject entirely before starting ⚠️

## Objectives

Implement a function _search_ that will return an array containing matching results of a data array against a search string.

What you will revise/learn/discover :
- String / Array manipulation
- POO
- Unit tests / PHPUnit
- Make use of regex (HINT: you may have a look at preg_grep php function)
- Overview of singleton pattern

Here is an online tool to test your regex [https://regex101.com/](https://regex101.com/)

#### Rules
- Usual Dojo rules
- Turns every 5 min.
- Use a liveshare VS code collaboration session, log in to room FREE COFFEE #GRP_NB , screen shared by someone w/ good connection and REC the dojo, so you can rewatch it later
- Note to the one who shares screen: Think of following the active pilot (by right clicking on his name in VSCode then > Follow participant, so the audience see what he/she's doing)

## Install

1. clone
2. run `composer install`
3. That's it, you are free to go, good luck ;)

## TODO

- Your code needs to be written in class _src/Search.php_ in method _search(...)_ 

- **Your job is considered done when all tests pass.** (See Testing section below)

Please consider pushing your code to a repo and sending me the link via a DM on Slack when done, so i can check your work.

### Use cases
- Search method must return an array of matching results
- Search must be case **insensitive**
- If empty search string is passed as parameters, an empty array should be returned
- if multiple words are passed as searchString, such as `"li ny"` , shall be returned array elements containing `"li"` AND `"ny"` in this expected order (whatever the characters in-between). Spaces act as term separator for the searchString. Thus, the previous example should return : `["My Little Pony]`. Also `"ny li"` as searchString should return an empty array as no title contains `"ny"` and `"li"` in this order.

A class constant `DATA` is defined in _Search_ Class. It contains the data we are searching in.
Actually, `const DATA = ['Rocky 1', 'Rocky 2', 'My Little Pony'];`.

## Testing

To execute tests, launch the following command in project root: 

`./vendor/bin/phpunit tests`

Have a look at the file _tests/SearchTest.php_ as it contains the results we are expecting from you.

## Singleton Design Pattern

You notice that the Search class declares a private constructor.
This is not an error, this is intended to design the Singleton Pattern.

We should see more about it during this afternoon livecoding session.

For more info for now, please read the following : [https://en.wikipedia.org/wiki/Singleton_pattern](https://en.wikipedia.org/wiki/Singleton_pattern)

Note: You can realise the exercise without understanding this notion as it is only used to instanciate the Search Class in Test File.