<?php

namespace App\Livewire\Admin\Customer;

use Customer\Models\Customer;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

use Rappasoft\LaravelLivewireTables\Views\Columns\{BooleanColumn, ImageColumn};
use Rappasoft\LaravelLivewireTables\Views\Filters\{DateFilter, MultiSelectFilter, SelectFilter};

class CustomerTable extends DataTableComponent
{
    protected $model = Customer::class;
    public string $tableName = 'customer';
    public array $customers = [];
    public array $bulkActions = [
        'exportSelected' => 'Export',
    ];


    public $columnSearch = [
        'name' => null,
        'family' => null,
        'cell' => null,
        'email' => null,
        'pic' => null,
    ];

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setUseHeaderAsFooterEnabled()
            ->setHideBulkActionsWhenEmptyEnabled()
            ->setFilterLayoutSlideDown()
            ->setRememberColumnSelectionDisabled()
            ->setSecondaryHeaderTrAttributes(function($rows) {
                return ['class' => 'bg-gray-100'];
            })
            ->setTableRowUrl(function($row) {
                //dd($row->id);
                return route('customer.show', $row->id);
            })
            ->setSortDesc('id');
        $this->setSearchEnabled();
        $this->setSearchPlaceholder('جستجو');
        $this->setSearchLive();

        $this->setBulkActions([
            'exportSelected' => 'Export',
        ]);

        $this->setBulkActionsStatus(true);
        $this->setBulkActionConfirms([
            'delete',
            'reset'
        ]);

        $this->setBulkActionsThCheckboxAttributes([
            'class' => 'bg-blue-500',
            'default' => false
        ]);


    }

    public function bulkActions(): array
    {
        return [
            'exportSelected' => 'Export',
        ];
    }



    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            ImageColumn::make("تصویر", "pic")
                ->location(function($row) {
                    //dd($row);
                    $customer_ = Customer::query()->find($row->id);
                    return asset($customer_->pic);
                })
                ->attributes(function($row) {
                    return [
                        'class' => 'w-50px rounded-circle',
                    ];
                }),
            Column::make("نام", "name")
                ->sortable(),
            Column::make("نام خانوادگی", "family")
                ->sortable(),
            Column::make("موبایل", "cell")
                ->sortable(),
            Column::make("دستبندی", "type")
                ->sortable(),
            Column::make("ایمیل", "email")
                ->sortable(),
            Column::make("ایجاد شده در", "created_at")
                ->sortable(),
            Column::make("بروز شده در", "updated_at")
                ->sortable(),
        ];
    }
}
