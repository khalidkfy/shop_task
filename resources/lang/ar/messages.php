<?php
return [
    'success_msg' => 'تم الحفظ بنجاح',
    'delete_success_msg' => 'تم الحذف بنجاح',
    'error_msg'=>'خطأ في العملية , الرجاء المحاولة لاحقا',
    'not_in_location'=>'لست ضمن نطاق العميل . الرجاء توجه لنطاق العميل ثم حاول مرة اخرى',
    'item_sent_to_sale'=>'تم ارسال لك منتجات من قبل المستودع الرجاء قم بتاكيد الاستلام',
    'item_from_sale_to_warehouse'=>'تم ارسال لك منتجات من قبل المندوب الرجاء قم بتاكيد الاستلام',
    'item_sent_to_master'=>'تم ارسال لك منتجات من قبل مسؤول الانتاج. الرجاء تاكيد الاستلام',
    'item_not_found'=>'الكمية المطلوبة للمنتج غير متوفرة',
    'item_sent_from_warehouse'=>'تم ارسال لك منتجات من قبل المستودع. الرجاء تاكيد الاستلام',
    'there_is_no_item'=>'لم يتم اختيار اي منتج للفاتورة',
    'item_over_load'=>'كمية المادة المطلوبة اكبر من الحد الاقصى لهذا العميل',
    'make_sure_this_client_has_item'=>'يرجى التأكد من تحديد المواد الخاصة بهذا العميل',
    'You_have_exceeded_the_maximum_discount'=>'لقد تعديت الاحد الاقصى للخصم المسموح لك. الرجاء مراجعة مندوب المبيعات',
    'item_not_defined_in_client'=>'لم يتم تعريف الحد الأدنى والاقصى لهذه المادة لهذا العميل',
    'this_client_is_not_active'=>'لا يمكن اصدار فاتورة لهذا العميل قبل تفعيله. الرجاء تفعيل العميل',
    'item_qty_client'=>'الكمية المتوفرة عند العميل',
    'item_qty_sale'=>'الكمية المتوفرة عند المندوب',
    'item_not_found_in_sale'=>'الكمية المطلوبة غير متوفرة في مستودع المندوب',
    'receipt_larger_than_remain'=>'قيمة السند اكبر من قيمة المتبقي للفاتورة',
    'items_not_defin_in_mian_class'=>'المنتج التالي لا يحتوي على كود ترميز وسعر لدى منتجات العميل',
    'errorContract' => 'الرجاء ادخال بيانات العقد قبل المناصب الإدارية',
    'delete_msg' => 'تم الحذف',
    'save_msg' => 'تم الحفظ',
    'visit_target_msg' => 'نشكرك على قيامك باكمال تارجت الزيارات اليومية',
    'change_status_agr' => 'تم تغير الحالة !',
    'create_inverse_agr' => 'تم إنشاء قيد معكوس !',
    'repeat_restriction_agr' => 'تم تكرار إنشاء هذا القيد',
    'sub_unit_error_msg'=>'نأسف. الوحدة القياس المستخدمة ليست الوحدة الأساسية للمادة الخام و لم يتم إضافتها كوحدة فرعية للوحدة الرئيسية',

    'required'=>'اسباب الإنحراف مطلوب.',
    'approve_agr'=>'تم الإعتماد',
    'calc_agr'=>'تم الإحتساب',
    'change_phase_agr'=>'العملية قيد التنفيذ!',
    'finish_phase_agr'=>'العملية إنتهت!',
    'warehouse_manager_qu'=>' تم طلب المواد لهذه الخطة,الرجاء النظر اذا كان هناك اي عجز في الكميات في المستوع المواد الخام',
    'gap_in_warehouse_agr'=>'هناك عجز في المواد الموجودة في المستودع',
    'carton_gap_in_warehouse_agr'=>'هناك عجز في الكرتون في المواد الموجودة في المستودع',
    'spend_gap_in_warehouse_agr'=>'تم صرف المواد',
    'miss_account' => 'الحساب غير موجود',
    'has_evaluate' => 'تم تقييم المستخدم من هذا المقيم لهذا العام مسبقا',
    'found_commission' => 'هناك مسير عمولات لهذا الشهر من هذه السنة',
    'receive' => 'تم الاستلام',
    'pending' => 'بانتظار الاستلام',
    'required_if_c' => ":attribute مطلوب في حال ما إذا تم إختيار الحقل.",
    'required_val' => "هذا الحقل مطلوب.",

    'new' => 'جديدة',
    'old' => 'مرجعة',
    'awards_discounts' => [
        'notify_in_cashing' => ' طلب صرف مكافئة للموظف: ',
        'awards_delete' => 'لا يمكن حذف هذه المكافئة لانها ليست ضمن المراجعة',
        'awards_approved' => 'لا يمكن اعتماد هذه المكافأة لانها ليست ضمن المراجعة',
        'awards_canceled' => 'لا يمكن الغاء هذه المكافأة لانها ليست ضمن المراجعة',

        'notify_in_discount' => ' طلب خصم للموظف: ',
        'discount_delete' => 'لا يمكن حذف هذا الخصم لانه ليس ضمن المراجعة',
        'discount_approved' => 'لا يمكن اعتماد هذا الخصم لانه ليس ضمن المراجعة',
        'discount_canceled' => 'لا يمكن الغاء هذا الخصم لانه ليس ضمن المراجعة',
    ],

    'payroll' => [
        'notify_save' => 'رواتب شهر  لسنة',
    ],

    'clients' => [
        'activate_code' => 'كود التفعيل الخاص بك هو: ',
        'activate_code_sec' => 'تم ارسال كود التفعيل بنجاح',
        'activate_code_err' => 'كود التفعيل خاطئ',
        'activate_success' => 'تم التفعيل بنجاح',
    ],
    'item_not_found_in_client'=>'الكمية المرجعة غير موجودة عند العميل',

    'plans_month' => [
        'found_plan' => 'نأسف, هناك خطة سابقة لهذا الشهر لهذا المندوب',
        'approve_agr'=>'تم الإعتماد',
        'not_found_plan' => 'نأسف, لا يوجد أي خطة سابقة لهذا الشهر لهذا العام',
    ],

    'main_plans'=>[
        'approve_agr'=>'تم الإعتماد من مدير المصنع',
        'reject_plan'=>'تم رفض الخطة العامة من مدير المالية.',
    ],
    'sendVisitAttention'=>'تم ارسال تنبيه لاحدى زياراتك.',
    'visitAttention'=>' تنبيه زيارة.',
    'noteText'=>'نص الملاحظة',
    'accept_ad'=>'تم الاعتماد الإداري لهذا العرض',
    'accept_fa'=>'تم الاعتماد المالي لهذا العرض',
    'reject_ad'=>'تم الرفض الإداري لهذا العرض',
    'reject_fa'=>'تم الرفض المالي لهذا العرض',
    'rejected'=>'تم الرفض',

    'resignation_last_work_day'=>'آخر يوم عمل يجب أن يكون على الأقل بعد 15 يوم .',
    'termination_contract_last_work_day'=>'آخر يوم عمل يجب أن يكون على الأقل بعد 60 يوم .',
    'terminate_contract_success_msg'=>'تم تقديم طلب إنهاء التعاقد بنجاح .',
    'resignation_success_msg'=>'تم تقديم طلب الاستقالة بنجاج .',
    'productsUnavailable'=>'غير متوفر في مستودع دعم المنتجات .',
    'confirm_msg'=>'هل أنت متأكد ؟',
    'can_not_exchange_msg'=>'هناك عملية صرف لم تتم يجب تنفيذها أولاً .',
    'actual_larger_than_expect_err_msg'=>'عدد العجنات الفعلية اكبرمن المتوقع فتم ارسال طلبية للمستودع يرجى الإنتظار حتى يثم صرفها و استلامها',
    'accepted_finish_before_msg' => 'لا يمكن انهاء امر التشغيل قبل استلام مواد الخام في المستودع',

    'bill_not_found'=>'الفاتورة غير موجودة ! ',
    'delegate_upload_date'=>'يجب أن يكون الطلب بتاريخ اليوم أو تاريخ لاحق !',

];
