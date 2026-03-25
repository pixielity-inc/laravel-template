<?php

declare(strict_types=1);

return [
    /*
     * |--------------------------------------------------------------------------
     * | CRUD Messages - Arabic
     * |--------------------------------------------------------------------------
     * |
     * | سلاسل الترجمة لعمليات الإنشاء والقراءة والتحديث والحذف.
     * | تستخدم في المتحكمات والخدمات لرسائل الاستجابة الموحدة.
     * |
     * | المتغيرات:
     * | - :resource  = اسم المورد المفرد (مثل "منشور"، "مستخدم")
     * | - :resources = اسم المورد الجمع (مثل "منشورات"، "مستخدمين")
     * | - :count     = عدد الموارد
     * | - :id        = معرف المورد
     * |
     */
    // Retrieval Messages
    'retrieved_successfully' => 'تم استرجاع :resource بنجاح',
    'list_retrieved_successfully' => 'تم استرجاع :resources بنجاح',
    'found' => 'تم العثور على :resource',
    'count_found' => 'تم العثور على :count :resource',
    // Creation Messages
    'created_successfully' => 'تم إنشاء :resource بنجاح',
    'count_created_successfully' => 'تم إنشاء :count :resource بنجاح',
    // Update Messages
    'updated_successfully' => 'تم تحديث :resource بنجاح',
    'count_updated_successfully' => 'تم تحديث :count :resource بنجاح',
    // Deletion Messages
    'deleted_successfully' => 'تم حذف :resource بنجاح',
    'count_deleted_successfully' => 'تم حذف :count :resource بنجاح',
    'soft_deleted_successfully' => 'تم الحذف المؤقت لـ :resource بنجاح',
    'restored_successfully' => 'تم استعادة :resource بنجاح',
    // Not Found Messages
    'not_found' => ':resource غير موجود',
    'list_not_found' => 'لم يتم العثور على :resources',
    'not_found_with_id' => ':resource برقم :id غير موجود',
    // Operation Failed Messages
    'create_failed' => 'فشل إنشاء :resource',
    'update_failed' => 'فشل تحديث :resource',
    'delete_failed' => 'فشل حذف :resource',
    'restore_failed' => 'فشلت استعادة :resource',
    // Conflict Messages
    'already_exists' => ':resource موجود بالفعل',
    'duplicate_entry' => 'تم اكتشاف إدخال :resource مكرر',
    'in_use' => ':resource قيد الاستخدام حالياً ولا يمكن حذفه',
    // General
    'no_changes_detected' => 'لم يتم اكتشاف أي تغييرات',
    'changes_saved' => 'تم حفظ التغييرات بنجاح',
];
