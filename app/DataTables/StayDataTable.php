<?php

namespace App\DataTables;

use App\Models\Stay;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Html\Editor\Editor;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;

class StayDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
        ->addColumn('thumbnail', function($query) {
            return '<img src="'.$query->thumbnail_image_link.'" alt="Image" style="width: 50px; height: 50px;">';
        })
            ->addColumn('action', function($query){
                $showBtn = "<a href='".route('admin.stay.show', $query->id)."' class='btn btn-success'>show</a>";
                $editBtn = "<a href='".route('admin.stay.edit', $query->id)."' class='btn mx-1 btn-primary'>Edit</a>";
               
                $deleteBtn = "<a href='".route('admin.stay.destroy', $query->id)."' class='btn btn-danger  delete-data'>Delete</a>";
                return "<div class='d-flex '>" .$showBtn  .$editBtn. $deleteBtn."</div>";
            })
            ->addColumn('thumbnail', function($query) {
                $imagePath = $query->thumbnail_image_link;
                $defaultImage = 'path/to/default/image.png'; // Provide a path to a default image.
                $imageUrl = file_exists(public_path($imagePath)) ? asset($imagePath) : asset($defaultImage);
                return '<img src="'.$imageUrl.'" alt="Image" style="width: 50px; height: 50px;">';
            })
            ->rawColumns(['thumbnail', 'action'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Stay $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('stay-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
         
            Column::make('id'),
            Column::make('name'),
            Column::make('stay_type'),
            Column::make('city'),
            Column::make('address'),
            Column::make('thumbnail'),
            Column::computed('action')
            ->exportable(false)
            ->printable(false)
            ->width(60)
            ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Stay_' . date('YmdHis');
    }
}
