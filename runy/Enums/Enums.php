<?php
namespace Enums;

enum CustomerTitle: string
{
    case Mr = 'آقا';
    case Woman = 'خانم';
    case Dr = 'دکتر';
    case Engineer = 'مهندس';
    case Master = 'استاد';
}

enum LevelUser: string
{
    case SAdmin = 'مدیرارشد';
    case Admin = 'مدیر';
    case Counter = 'کارمند';
    case Seller = 'فروشنده';
    case Editor = 'ویرایشگر';
    case Sales_Manager = 'مدیرفروش';
    case Accountants = 'حسابدار';
    case Senior_Employee = 'کارمند ارشد';
    case Company = 'شرکت';
    case Company_Counter = 'کارهمند شرکت همکار';
    case customer = 'مشتری';
}
