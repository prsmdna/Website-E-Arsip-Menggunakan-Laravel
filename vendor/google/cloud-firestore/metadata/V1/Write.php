<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/write.proto

namespace GPBMetadata\Google\Firestore\V1;

class Write
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Firestore\V1\Common::initOnce();
        \GPBMetadata\Google\Firestore\V1\Document::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
google/firestore/v1/write.protogoogle.firestore.v1"google/firestore/v1/document.protogoogle/protobuf/timestamp.proto"�
Write/
update (2.google.firestore.v1.DocumentH 
delete (	H ;
	transform (2&.google.firestore.v1.DocumentTransformH 6
update_mask (2!.google.firestore.v1.DocumentMaskP
update_transforms (25.google.firestore.v1.DocumentTransform.FieldTransform;
current_document (2!.google.firestore.v1.PreconditionB
	operation"�
DocumentTransform
document (	O
field_transforms (25.google.firestore.v1.DocumentTransform.FieldTransform�
FieldTransform

field_path (	`
set_to_server_value (2A.google.firestore.v1.DocumentTransform.FieldTransform.ServerValueH /
	increment (2.google.firestore.v1.ValueH -
maximum (2.google.firestore.v1.ValueH -
minimum (2.google.firestore.v1.ValueH B
append_missing_elements (2.google.firestore.v1.ArrayValueH @
remove_all_from_array (2.google.firestore.v1.ArrayValueH "=
ServerValue
SERVER_VALUE_UNSPECIFIED 
REQUEST_TIMEB
transform_type"u
WriteResult/
update_time (2.google.protobuf.Timestamp5
transform_results (2.google.firestore.v1.Value"q
DocumentChange/
document (2.google.firestore.v1.Document

target_ids (
removed_target_ids ("m
DocumentDelete
document (	
removed_target_ids (-
	read_time (2.google.protobuf.Timestamp"m
DocumentRemove
document (	
removed_target_ids (-
	read_time (2.google.protobuf.Timestamp"3
ExistenceFilter
	target_id (
count (B�
com.google.firestore.v1B
WriteProtoPZ<google.golang.org/genproto/googleapis/firestore/v1;firestore�GCFS�Google.Cloud.Firestore.V1�Google\\Cloud\\Firestore\\V1�Google::Cloud::Firestore::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

