<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: fedex.proto

namespace Carrier\Fedex;

class Fedex
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
?
fedex.protofedex"0
Auth
	client_id (	
client_secret (	"K
Linkman
address (2.fedex.Address
contact (2.fedex.Contact"|
Address
street_lines (	
city (	
state (	
postal_code (	
country_code (	
residential ("z
Contact
person_name (	
email_address (	
phone_extension (	
phone_number (	
company_name (	";
Payor2
responsible_party (2.fedex.ResponsibleParty"*
ResponsibleParty
account_number (	"?
ShippingChargesPayment?
payment_type (2).fedex.ShippingChargesPayment.PaymentType
account_number (	"F
PaymentType

SENDER 
	RECIPIENT
THIRD_PARTY
COLLECT"?
SmartPostInfoDetail
hub_id (	3
indicia (2".fedex.SmartPostInfoDetail.IndiciaM
ancillaryEndorsement (2/.fedex.SmartPostInfoDetail.AncillaryEndorsement"{
Indicia

MEDIA_MAIL 
PARCEL_RETURN
PARCEL_SELECT"
PRESORTED_BOUND_PRINTED_MATTER
PRESORTED_STANDARD"?
AncillaryEndorsement
ADDRESS_CORRECTION  
CARRIER_LEAVE_IF_NO_RESPONSE
CHANGE_SERVICE
FORWARDING_SERVICE
RETURN_SERVICE"?
LabelSpecificationB
label_stock_type (2(.fedex.LabelSpecification.LabelStockType7

image_type (2#.fedex.LabelSpecification.ImageType"
LabelStockType
	PAPER_4X6 "2
	ImageType	
ZPLII 
EPL2
PDF
PNG"Q
Weight 
unit (2.fedex.Weight.Unit
value ("
Unit
KG 
LB"?
CustomerReferencesP
customer_reference_type (2/.fedex.CustomerReferences.CustomerReferenceType
value (	"?
CustomerReferenceType
CUSTOMER_REFERENCE 
DEPARTMENT_NUMBER
INVOICE_NUMBER

P_O_NUMBER%
!INTRACOUNTRY_REGULATORY_REFERENCE
RMA_ASSOCIATION"r
RequestedPackageLineItems
weight (2.fedex.Weight6
customer_references (2.fedex.CustomerReferences"?
RequestedShipment
shipper (2.fedex.Linkman"

recipients (2.fedex.Linkman8
pickup_type (2#.fedex.RequestedShipment.PickupType:
service_type (2$.fedex.RequestedShipment.ServiceType7
SmartPostInfoDetail (2.fedex.SmartPostInfoDetail>
packaging_type (2&.fedex.RequestedShipment.PackagingType?
shipping_charges_payment (2.fedex.ShippingChargesPayment6
label_specification (2.fedex.LabelSpecificationF
requested_package_line_items	 (2 .fedex.RequestedPackageLineItems"d

PickupType
CONTACT_FEDEX_TO_SCHEDULE 
DROPOFF_AT_FEDEX_LOCATION
USE_SCHEDULED_PICKUP"{
ServiceType
FEDEX_GROUND 
GROUND_HOME_DELIVERY

SMART_POST
FEDEX_1_DAY_FREIGHT
FEDEX_2_DAY_FREIGHT"?
PackagingType
YOUR_PACKAGING 
FEDEX_ENVELOPE
	FEDEX_BOX
FEDEX_SMALL_BOX
FEDEX_MEDIUM_BOX
FEDEX_LARGE_BOX
FEDEX_EXTRA_LARGE_BOX
FEDEX_10KG_BOX
FEDEX_25KG_BOX
	FEDEX_PAK	

FEDEX_TUBE
"?
CreateShipmentRequest"
authorization (2.fedex.Auth4
requested_shipment (2.fedex.RequestedShipmentQ
label_response_options (21.fedex.CreateShipmentRequest.LabelResponseOptions
account_number (	"/
LabelResponseOptions
URL_ONLY 	
LABEL"@
CreateShipmentResponse
label (	
tracking_number (	"H
TrackRequest"
authorization (2.fedex.Auth
track_number (	"A
Nodes
code (	
status (	
date (	
desc (	",
TrackResponse
nodes (2.fedex.Nodes2?
ServiceM
CreateShipment.fedex.CreateShipmentRequest.fedex.CreateShipmentResponse2
Track.fedex.TrackRequest.fedex.TrackResponseB/Z
grpc/fedex?Carrier\\Fedex??Carrier\\Fedexbproto3'
        , true);

        static::$is_initialized = true;
    }
}

