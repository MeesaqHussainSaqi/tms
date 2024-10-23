<?php

namespace App\Config;

class Constant
{
    const ARR_VERSION = '1.1';

    const RequestType = [
        'GET_ONE' => "GET_ONE",
        'GET_ALL' => "GET_ALL"
    ];

    const RecordType = [
        'DISABLED' => 0,
        'ENABLED' => 1,
        'DELETED' => 2,

        // User related
        'PENDING_ACTIVE' => 3,
        'PENDING_INACTIVE' => 4,
        'PENDING_DELETE' => 5,

        'REJECTED' => 6,

        //PBO Related
        'CANCELLED' => 7,
    ];

    const LangDir = [
        'RTL' => 1,
        'LTR' => 2,
    ];

    const Frequencies = [
        'YEAR', 'MONTH', 'WEEK', 'DAY'
    ];

    const PermissionsMethod = [
        'POST', 'PUT', 'PATCH', 'DELETE', 'GET'
    ];

    const PermissionsLabel = [
        'Add', 'Edit', 'Change Status', 'Delete', 'View'
    ];

    const Page = 1;
    const PageSize = 100;
    const MaxPageSize = 500;
    const OrderType = 'desc';
    const OrderBy = 'id';

    // Status Types
    const Success = 'success';
    const Warning = 'warning';
    const Error = 'error';
    const NoContentFound = 'No Content Found';

    // HTTP Status Codes
    const HTTP_OK = 200; // The request was successful.
    const HTTP_CREATED = 201; // The request has been fulfilled, resulting in the creation of a new resource.
    const HTTP_NO_CONTENT = 204; // The server successfully processed the request but there is no content to send.
    const HTTP_BAD_REQUEST = 400; // The request cannot be fulfilled due to bad syntax or other client-side error.
    const HTTP_UNAUTHORIZED = 401; // The request has not been applied because it lacks valid authentication credentials.
    const HTTP_FORBIDDEN = 403; // The server understood the request but refuses to authorize it.
    const HTTP_NOT_FOUND = 404; // The server cannot find the requested resource.
    const HTTP_METHOD_NOT_ALLOWED = 405; // The method specified in the request is not allowed for the resource.
    const HTTP_INTERNAL_SERVER_ERROR = 500; // A generic error message returned when an unexpected condition was encountered on the server.
    const HTTP_VALIDATION_FAILED = 422;
    /*   OEM Dealer Code   */
    const OEM_DEALER_CODE = 1023;

    // Columns for Other LOVs
    const OTHER_LOV_COLUMNS = [
        "Dealer" => [
            "columns" => ["id", "dealer_name"],
            "relations" => []
        ],
        "User" => [
            "columns" => ["id", "full_name"],
            "relations" => []
        ],
        "Item" => [
            "columns" => ["id", "item_name"],
            "relations" => []
        ],
        "Roles" => [
            "columns" => ["id", "name"],
            "relations" => []
        ],
        "SaleOrder" => [
            "columns" => ["id", "booking_number", "customer_id"],
            "relations" => [
                "customer:id,name",
                "sale_order_detail.item:id,item_name",
                "sale_order_detail.variant:id,name"
            ]
        ],
    ];
}
