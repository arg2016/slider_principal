<?php

class modSliderUnachHelper
{
    public static function getK2Items($categoria)
    {
        $db = JFactory::getDBO();
        $query = $db->getQuery(true);
        $query->select($db->quoteName(array('id', 'title','alias','catid','featured','extra_fields')));
        $query->from($db->quoteName('#__k2_items'));
        $query->where($db->quoteName('published') . '=1 AND' .$db->quoteName('trash') . '=0 AND' . $db->quoteName('catid') . '='.$categoria);
        $query->order('ordering DESC');
        $db->setQuery($query);
        $data = $db->loadObjectList();
        //$items='';
        /*$items=array();*/
        /*foreach ($data as $item)
        {
            $items.='<h1>';
            $items.=$item->title;
            $items.='</h1>';
            $items.='</br>';

            
        }*/
        return $data;
    }
}
