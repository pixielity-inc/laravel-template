<?php

declare(strict_types=1);

return [
    /*
     * |--------------------------------------------------------------------------
     * | CRUD Messages - English
     * |--------------------------------------------------------------------------
     * |
     * | Translation strings for Create, Read, Update, Delete operations.
     * | Used in controllers and services for standardized response messages.
     * |
     * | Placeholders:
     * | - :resource  = Singular resource name (e.g., "Post", "User")
     * | - :resources = Plural resource name (e.g., "Posts", "Users")
     * | - :count     = Number of resources
     * | - :id        = Resource identifier
     * |
     */
    // Retrieval Messages
    'retrieved_successfully' => ':resource retrieved successfully',
    'list_retrieved_successfully' => ':resources retrieved successfully',
    'found' => ':resource found',
    'count_found' => ':count :resources found',
    // Creation Messages
    'created_successfully' => ':resource created successfully',
    'count_created_successfully' => ':count :resources created successfully',
    // Update Messages
    'updated_successfully' => ':resource updated successfully',
    'count_updated_successfully' => ':count :resources updated successfully',
    // Deletion Messages
    'deleted_successfully' => ':resource deleted successfully',
    'count_deleted_successfully' => ':count :resources deleted successfully',
    'soft_deleted_successfully' => ':resource soft deleted successfully',
    'restored_successfully' => ':resource restored successfully',
    // Not Found Messages
    'not_found' => ':resource not found',
    'list_not_found' => 'No :resources found',
    'not_found_with_id' => ':resource with ID :id not found',
    // Operation Failed Messages
    'create_failed' => 'Failed to create :resource',
    'update_failed' => 'Failed to update :resource',
    'delete_failed' => 'Failed to delete :resource',
    'restore_failed' => 'Failed to restore :resource',
    // Conflict Messages
    'already_exists' => ':resource already exists',
    'duplicate_entry' => 'Duplicate :resource entry detected',
    'in_use' => ':resource is currently in use and cannot be deleted',
    // General
    'no_changes_detected' => 'No changes detected',
    'changes_saved' => 'Changes saved successfully',
];
