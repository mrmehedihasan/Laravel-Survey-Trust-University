<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\SWOT;

class AdminSwotController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'SWOT';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */

    protected function grid()
    {
        $grid = new Grid(new SWOT());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('contact', __('Contact'));
        $grid->column('position', __('Position'));
        $grid->column('strength-a', __('Strength a'));
        $grid->column('strength-b', __('Strength b'));
        $grid->column('strength-c', __('Strength c'));
        $grid->column('strength-d', __('Strength d'));
        $grid->column('strength-outcome-a', __('Strength outcome a'));
        $grid->column('strength-outcome-b', __('Strength outcome b'));
        $grid->column('strength-outcome-c', __('Strength outcome c'));
        $grid->column('strength-outcome-d', __('Strength outcome d'));
        $grid->column('weakness-a', __('Weakness a'));
        $grid->column('weakness-b', __('Weakness b'));
        $grid->column('weakness-c', __('Weakness c'));
        $grid->column('weakness-d', __('Weakness d'));
        $grid->column('weakness-overcome-a', __('Weakness Overcome a'));
        $grid->column('weakness-overcome-b', __('Weakness Overcome b'));
        $grid->column('weakness-overcome-c', __('Weakness Overcome c'));
        $grid->column('weakness-overcome-d', __('Weakness Overcome d'));
        $grid->column('opportunities-a', __('Opportunities a'));
        $grid->column('opportunities-b', __('Opportunities b'));
        $grid->column('opportunities-c', __('Opportunities c'));
        $grid->column('opportunities-d', __('Opportunities d'));
        $grid->column('opportunities-utilize-a', __('Opportunities utilize a'));
        $grid->column('opportunities-utilize-b', __('Opportunities utilize b'));
        $grid->column('opportunities-utilize-c', __('Opportunities utilize c'));
        $grid->column('opportunities-utilize-d', __('Opportunities utilize d'));
        $grid->column('threats-a', __('Threats a'));
        $grid->column('threats-b', __('Threats b'));
        $grid->column('threats-c', __('Threats c'));
        $grid->column('threats-d', __('Threats d'));
        $grid->column('threats-minimized-a', __('Threats minimized a'));
        $grid->column('threats-minimized-b', __('Threats minimized b'));
        $grid->column('threats-minimized-c', __('Threats minimized c'));
        $grid->column('threats-minimized-d', __('Threats minimized d'));
        $grid->column('comments', __('Comments'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(SWOT::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('contact', __('Contact'));
        $show->field('position', __('Position'));
        $show->field('strength-a', __('Strength a'));
        $show->field('strength-b', __('Strength b'));
        $show->field('strength-c', __('Strength c'));
        $show->field('strength-d', __('Strength d'));
        $show->field('strength-outcome-a', __('Strength outcome a'));
        $show->field('strength-outcome-b', __('Strength outcome b'));
        $show->field('strength-outcome-c', __('Strength outcome c'));
        $show->field('strength-outcome-d', __('Strength outcome d'));
        $show->field('weakness-a', __('Weakness a'));
        $show->field('weakness-b', __('Weakness b'));
        $show->field('weakness-c', __('Weakness c'));
        $show->field('weakness-d', __('Weakness d'));
        $show->field('weakness-overcome-a', __('Weakness Overcome A'));
        $show->field('weakness-overcome-b', __('Weakness Overcome B'));

        $show->field('weakness-overcome-c', __('Weakness Overcome c'));

        $show->field('weakness-overcome-d', __('Weakness Overcome D'));

        $show->field('opportunities-a', __('Opportunities a'));
        $show->field('opportunities-b', __('Opportunities b'));
        $show->field('opportunities-c', __('Opportunities c'));
        $show->field('opportunities-d', __('Opportunities d'));
        $show->field('opportunities-utilize-a', __('Opportunities utilize a'));
        $show->field('opportunities-utilize-b', __('Opportunities utilize b'));
        $show->field('opportunities-utilize-c', __('Opportunities utilize c'));
        $show->field('opportunities-utilize-d', __('Opportunities utilize d'));
        $show->field('threats-a', __('Threats a'));
        $show->field('threats-b', __('Threats b'));
        $show->field('threats-c', __('Threats c'));
        $show->field('threats-d', __('Threats d'));
        $show->field('threats-minimized-a', __('Threats minimized a'));
        $show->field('threats-minimized-b', __('Threats minimized b'));
        $show->field('threats-minimized-c', __('Threats minimized c'));
        $show->field('threats-minimized-d', __('Threats minimized d'));
        $show->field('comments', __('Comments'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new SWOT());

        $form->text('name', __('Name'));
        $form->text('contact', __('Contact'));
        $form->text('position', __('Position'));
        $form->text('strength-a', __('Strength a'));
        $form->text('strength-b', __('Strength b'));
        $form->text('strength-c', __('Strength c'));
        $form->text('strength-d', __('Strength d'));
        $form->text('strength-outcome-a', __('Strength outcome a'));
        $form->text('strength-outcome-b', __('Strength outcome b'));
        $form->text('strength-outcome-c', __('Strength outcome c'));
        $form->text('strength-outcome-d', __('Strength outcome d'));
        $form->text('weakness-a', __('Weakness a'));
        $form->text('weakness-b', __('Weakness b'));
        $form->text('weakness-c', __('Weakness c'));
        $form->text('weakness-d', __('Weakness d'));
        $form->text('weakness-overcome-a', __('Weakness overcome a'));
        $form->text('weakness-overcome-b', __('Weakness overcome b'));
        $form->text('weakness-overcome-c', __('Weakness overcome c'));
        $form->text('weakness-overcome-d', __('Weakness overcome d'));

        $form->text('opportunities-a', __('Opportunities a'));
        $form->text('opportunities-b', __('Opportunities b'));
        $form->text('opportunities-c', __('Opportunities c'));
        $form->text('opportunities-d', __('Opportunities d'));
        $form->text('opportunities-utilize-a', __('Opportunities utilize a'));
        $form->text('opportunities-utilize-b', __('Opportunities utilize b'));
        $form->text('opportunities-utilize-c', __('Opportunities utilize c'));
        $form->text('opportunities-utilize-d', __('Opportunities utilize d'));
        $form->text('threats-a', __('Threats a'));
        $form->text('threats-b', __('Threats b'));
        $form->text('threats-c', __('Threats c'));
        $form->text('threats-d', __('Threats d'));
        $form->text('threats-minimized-a', __('Threats minimized a'));
        $form->text('threats-minimized-b', __('Threats minimized b'));
        $form->text('threats-minimized-c', __('Threats minimized c'));
        $form->text('threats-minimized-d', __('Threats minimized d'));
        $form->text('comments', __('Comments'));

        return $form;
    }
}
