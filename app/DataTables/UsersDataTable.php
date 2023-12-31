<?php

namespace App\DataTables;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class UsersDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->setRowId('id')
            ->addColumn('action', '<div>
            <a href="{{ route(\'users.show\', $id) }}" class="btn btn-sm btn-alt-secondary" title="Ver"><i class="fa fa-eye"></i></a>
            <a href="{{ route(\'users.edit\', $id) }}" class="btn btn-sm btn-alt-primary" title="Editar"><i class="fa fa-edit"></i></a>
            <form action="{{ route(\'users.destroy\', $id) }}" method="POST" style="display: inline-block;">
                @csrf
                @method(\'DELETE\')
                <button type="submit" class="btn btn-sm btn-alt-danger" title="Eliminar"><i class="fa fa-trash"></i></button>
            </form>
            <script type="module">
            $(document).ready(function() {
                $(".btn-alt-danger").on("click", function(e) {
                    e.preventDefault();
                    var $button = $(this);
                    Swal.fire({
                        title: "¿Estás seguro?",
                        text: "Una vez eliminado, no podrás recuperar este registro!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#6f9c40",
                        cancelButtonColor: "#e04f1a",
                        confirmButtonText: "Sí, eliminarlo",
                        cancelButtonText: "Cancelar"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $button.parent().submit();
                            // update datatable
                            table.draw();
                        }
                    });
                });
            });
            </script>
            </div>')
            ;
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(User $model): QueryBuilder
    {
        return $model->newQuery()->select('id', 'name', 'role', 'email', 'id_places');
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('users-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->language('//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json')
                    //->dom('Bfrtip')
                    ->orderBy(0)
                    ->buttons([
                        Button::make('excel'),
                        //Button::make('csv'),
                        //Button::make('pdf'),
                        //Button::make('print'),
                        //Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [

            Column::make('id')->title('#')->width(50),
            Column::make('name')->title('Nombre'),
            Column::make('role')->title('Rol'),
            Column::make('email')->title('Correo Electronico'),
            Column::make('id_places')->title('Lugar'),
            Column::computed('action')
                ->title('')
                  ->exportable(false)
                  ->printable(false)
                  ->width(150)
                  ->addClass('text-center')
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Users_' . date('YmdHis');
    }
}
