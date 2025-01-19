<?php
header('Content-Type: application/json');

$projects = [
    [
        "title" => "Payment Service",
        "description" =>
            "<p>[Technology-Java, Spring Boot, JPA, Hybarnate, MySql]</p>
                            <p>This project mainly a payment gateway to make payment from any service as like this service can be used as a payment
                            gateway with a E-Commerce application.</p>
                            <div style='padding-left: 10px'>
                                FEATURES:<br>
                                 Authentication and Authorization.<br>
                                 Make E-Money from E-Money seller.<br>
                                 Create distributor.<br>
                                 Merchant to user payment.<br>
                                 User to User Payment.<br>
                                 Distributor to merchant payment with considering
                                their percentage.<br>
                            </div>",
        "link" => "https://github.com/Mst-Nipa-Khatun/Payment-Service"
    ],
    [
        "title" => "Book Store Management",
        "description" => "<p>[Technology-Java, Spring Boot, HTML, CSS, Thymeleaf, 
                            JPA, Hybarnate, MySql ]</p>
                            <p>It is web application for Book store management
                             system where I have made REST API to Book Create, Read ,Update,
                                Delete and integrated those API’s with frontend using Thymeleaf.</p>",
        "link" => "https://github.com/Mst-Nipa-Khatun/Book-Store-Management"
    ],

    [
        "title" => "Student Management",
        "description" => "<p>[Technology- Java , Spring Boot ,HTML, CSS ,JPA, Hybarnate, Thymeleaf, MySql ]</p>
                          <p>It is web application, here I have created multiple REST API and 
                          integrated with frontend using Thymeleaf.
                            Added functionality add, update, delete, result.</p>",
        "link" => "https://github.com/Mst-Nipa-Khatun/Student-Management-System/tree/master/StudnetManagement"
    ],
];


echo json_encode(["projects" => $projects]);
?>