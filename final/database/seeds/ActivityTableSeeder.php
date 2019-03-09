<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;

class ActivityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Data Type
        $dataType = $this->dataType('name', 'activities');
        if (!$dataType->exists) {
            $dataType->fill([
                'slug' => 'activities',
                'display_name_singular' => 'Activity',
                'display_name_plural' => 'Activities',
                'icon' => 'voyager-rocket',
                'model_name' => 'App\\Models\\Activity',
                'controller' => '',
                'generate_permissions' => 1,
                'description' => '',
            ])->save();
        }
        //Data Rows
        $activityDataType = DataType::where('slug', 'activities')->firstOrFail();
        $dataRow = $this->dataRow($activityDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'number',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'order' => 10,
            ])->save();
        }

        $dataRow = $this->dataRow($activityDataType, 'activity_belongsto_location_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'relationship',
                'display_name' => 'locations',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => [
                    'model' => 'App\\Models\\Location',
                    'table' => 'locations',
                    'type' => 'belongsTo',
                    'column' => 'location_id',
                    'key' => 'id',
                    'label' => 'display_name',
                    'pivot_table' => 'name',
                    'pivot' => 0,
                ],
                'order' => 20,
            ])->save();
        }

        $dataRow = $this->dataRow($activityDataType, 'activity_belongsto_category_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'relationship',
                'display_name' => 'categories',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => [
                    'model' => 'App\\Models\\Category',
                    'table' => 'categories',
                    'type' => 'belongsTo',
                    'column' => 'category_id',
                    'key' => 'id',
                    'label' => 'name',
                ],
                'order' => 30,
            ])->save();
        }

        $dataRow = $this->dataRow($activityDataType, 'activity_belongsto_user_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'relationship',
                'display_name' => 'users',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => [
                    'model' => 'App\\Models\\User',
                    'table' => 'users',
                    'type' => 'belongsTo',
                    'column' => 'user_id',
                    'key' => 'id',
                    'label' => 'name',
                    'pivot_table' => 'name',
                    'pivot' => 0,
                ],
                'order' => 40,
            ])->save();
        }

        $dataRow = $this->dataRow($activityDataType, 'location_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Location - City',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 0,
                'delete'       => 1,
                'order'        => 2,
            ])->save();
        }
        $dataRow = $this->dataRow($activityDataType, 'category_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Category',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 0,
                'delete'       => 1,
                'order'        => 2,
            ])->save();
        }
        $dataRow = $this->dataRow($activityDataType, 'user_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Author Created',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 0,
                'delete'       => 1,
                'order'        => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($activityDataType, 'description');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'rich_text_box',
                'display_name' => 'Description',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'order' => 50,
                'details' => [
                    'default' => 'Default Description'
                ]
            ])->save();
        }

        $dataRow = $this->dataRow($activityDataType, 'highlight');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'rich_text_box',
                'display_name' => 'Highlight',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'order' => 51,
                'details' => [
                    'default' => 'Default Highlight'
                ]
            ])->save();
        }

        $dataRow = $this->dataRow($activityDataType, 'itinerary');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'rich_text_box',
                'display_name' => 'Itinerary',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'order' => 52,
                'details' => [
                    'default' => 'Default Itinerary'
                ]
            ])->save();
        }

        $dataRow = $this->dataRow($activityDataType, 'age');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'number',
                'display_name' => 'Recommend Age',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'order' => 60,
                'details' => [
                    'default' => 18
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($activityDataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.slug'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'slugify' => [
                        'origin'      => 'title',
                        'forceUpdate' => true,
                    ],
                    'validation' => [
                        'rule'  => 'unique:slug',
                    ],
                ],
                'order' => 8,
            ])->save();
        }

        $dataRow = $this->dataRow($activityDataType, 'isActive');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'checkbox',
                'display_name' => 'Status',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'order' => 70,
                'details' => [
                    "on" => "ACTIVE",
                    "off" => "INACTIVE",
                    "checked" => true
                ]
            ])->save();
        }

        $dataRow = $this->dataRow($activityDataType, 'isInquiry');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'checkbox',
                'display_name' => 'Can Inquiry',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'order' => 71,
                'details' => [
                    "on" => "Yes",
                    "off" => "No",
                    "checked" => true
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($activityDataType, 'isDiscount');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'checkbox',
                'display_name' => 'Allow Discount',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'order' => 72,
                'details' => [
                    "on" => "yes",
                    "off" => "no",
                    "checked" => false
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($activityDataType, 'isPackage');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'checkbox',
                'display_name' => 'Activity Type',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'order' => 73,
                'details' => [
                    "on" => "Package",
                    "off" => "Tour",
                    "checked" => false
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($activityDataType, 'isFeature');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'checkbox',
                'display_name' => 'Show on Homepage',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'order' => 74,
                'details' => [
                    "on" => "Yes",
                    "off" => "No",
                    "checked" => false
                ]
            ])->save();
        }

        $dataRow = $this->dataRow($activityDataType, 'title');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Title',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'order' => 41,
                'details' => [
                    'default' => 'Untitled Tour'
                ]
            ])->save();
        }

        $dataRow = $this->dataRow($activityDataType, 'month');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Month',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'order' => 53,
                'details' => [
                    'default' => 'Untitled Tour'
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($activityDataType, 'departure_time');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Departure Time',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'order' => 54,
                'details' => [
                    'default' => 'Untitled Tour'
                ]
            ])->save();
        }


        $menu = Menu::where('name', 'admin')->firstOrFail();

        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Activities',
            'url'     => '',
            'route'   => 'voyager.activities.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-boat',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 1,
            ])->save();
        }

    }

    protected function dataRow($type, $field)
    {
        return DataRow::firstOrNew([
            'data_type_id' => $type->id,
            'field' => $field,
        ]);
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }


}
