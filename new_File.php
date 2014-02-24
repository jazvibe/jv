{
    "_id" : "5c2f352e-797b-11e3-85d3-0090f5e8655g",
    "slug" : "passkit-coupon-2",
    "description" : "Simple dummy transaction module",
    "type" : "internal",
    "class" : "\\Moontoast\\App\\ApiTransactions\\Module\\CouponPasskitTransactionModule",
    "url" : null,
    "options" : null,
    "inputSchema" : {
        "$schema" : "http:\/\/json-schema.org\/draft-04\/schema#",
        "title" : "Input",
        "type" : "object",
        "properties" : {
            "couponGroupId" : {
                "type" : "string"
            },
            "data_coupon" : {
                "type" : "string"
            },
            "template" : {
                "type" : "string"
            },
            "email" : {
                "type" : "string"
            }
        }
    },
    "outputSchema" : {
        "$schema" : "http:\/\/json-schema.org\/draft-04\/schema#",
        "title" : "Output",
        "type" : "object",
        "required" : [ 
            "status"
        ],
        "properties" : {
            "status" : {
                "type" : [ 
                    "integer", 
                    "string", 
                    "boolean"
                ]
            },
            "error" : {
                "type" : "string"
            },
            "response" : {
                "type" : "string"
            }
        }
    },
    "version" : 1,
    "created" : {
        "sec" : 1387382851,
        "usec" : 0
    },
    "updated" : {
        "sec" : 1387382852,
        "usec" : 0
    }
}
