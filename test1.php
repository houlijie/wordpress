FORMAT: 1A

# test

# articles [/api]
article resource representation

## Create article [POST /api/article]
get a json response

+ Parameters
    + username: (string, optional) - name of user
        + Default: json

+ Request testddd (application/json)
    + Headers

            x-Custom: dddd
    + Body

            {
                "username": "json",
                "age": "13"
            }

+ Response 200 (application/json)
    + Body

            {
                "username": "json"
            }

+ Request (application/json)
    + Body

            {
                "username": "json",
                "age": "13"
            }

+ Response 200 (application/json)
    + Body

            {
                "id": 1,
                "username": "json"
            }

+ Response 422 (application/json)
    + Body

            {
                "error": [
                    "dsdhsdsd"
                ]
            }