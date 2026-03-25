<?php

declare(strict_types=1);

return [
    /*
     * |--------------------------------------------------------------------------
     * | Validation Messages - Arabic
     * |--------------------------------------------------------------------------
     * |
     * | سلاسل الترجمة لأخطاء ورسائل التحقق من الصحة.
     * | تستخدم في Dtos وطلبات النماذج وقواعد التحقق.
     * |
     */
    'failed' => 'فشل التحقق من الصحة',
    'invalid_data' => 'البيانات المقدمة غير صالحة',
    'required_field' => 'حقل :field مطلوب',
    'invalid_field' => 'قيمة غير صالحة للحقل :field',
    'field_too_long' => 'حقل :field طويل جداً',
    'field_too_short' => 'حقل :field قصير جداً',
    'invalid_format' => 'تنسيق غير صالح لـ :field',
    'invalid_email' => 'عنوان البريد الإلكتروني غير صالح',
    'invalid_url' => 'رابط URL غير صالح',
    'invalid_date' => 'تنسيق التاريخ غير صالح',
    'invalid_number' => 'رقم غير صالح',
    'min_value' => 'يجب أن يكون :field على الأقل :min',
    'max_value' => 'يجب ألا يتجاوز :field :max',
    'between_values' => 'يجب أن يكون :field بين :min و :max',
    'unique_violation' => 'تم استخدام :field بالفعل',
    'exists_violation' => ':field المحدد غير صالح',
];
