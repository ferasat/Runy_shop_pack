<?php

namespace Product\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Product\Models\Discount;
use App\Http\Controllers\Controller;


class DiscountController extends Controller
{
    public function index()
    {
        $title = 'تخفیف ها';
        $description = 'مدیریت تخفیف';
        $breadcrumbs = ["/dashboard" => " پیشخوان ", "/dashboard/discount" => " تخفیف ها  "];

        $discounts = Discount::all()->sortByDesc('id');

        return view('ProductView::discount.indexDiscount', compact('title', 'description', 'breadcrumbs', 'discounts'));
    }
    public function create()
    {

        $new = new Discount();
        $new->code = 'none';
        $new->amount = 0;
        $new->type = 'percentage';
        $new->status = 'active';
        $new->user_id = Auth::id();
        $new->save();

        return redirect()->to('dashboard/discount/edit/' . $new->id);

    }
    public function edit(Discount $id)
    {
        $title = 'ویرایش ' . $id->name;
        $description = 'ویرایش تخفیف';
        $breadcrumbs = ["/dashboard" => " پیشخوان ", "/dashboard/discount" => " تخفیف ها  "];
        $discount = $id;

        return view('ProductView::discount.editDiscount', compact('title', 'description',
            'breadcrumbs', 'discount'));
    }
}
