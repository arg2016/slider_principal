<?php

defined('_JEXEC') or die('Restricted access');
jimport('joomla.form.formfield');

class JFormFieldCategoriaK2 extends JFormField {

    protected $type = 'Categoriak2';

    public function getInput() {
        $db = JFactory::getDBO();
        $query = $db->getQuery(true);
        $query->select($db->quoteName(array('id', 'name')));
        $query->from($db->quoteName('#__k2_categories'));
        $query->where($db->quoteName('published') . '=1 AND' . $db->quoteName('trash') . '=0');
        $query->order('ordering ASC');
        $db->setQuery($query);
        $data = $db->loadObjectList();
        $items=array();
        foreach ($data as $item)
        {
            $items[]=JHTML::_('select.option',$item->id,' '.$item->name);
            
        }
        $output= JHTML::_('select.genericlist',  $items, $this->name."[]", 'class="inputbox"  categoriak2="categoriak2" size="10" ', 'value', 'text', $this->value, $this->id );
		
	return $output;
       /* $msg='<select id="' . $this->id . '" name="' . $this->name . '">';
            $msg.="<option value='0'>Selecciona la categoria</option>";
           foreach ($results as $row)
           {
            
            $msg.="<option value=".$row->name.">$row->name</option>";
            
            // $msg='<h1>'.$row->name.'</h1>';
           }$msg.="</select>";
           
           return $msg;

        /* return '<select id="' . $this->id . '" name="' . $this->name . '">' .
          '<option value="1" >New York</option>' .
          '<option value="2" >Chicago</option>' .
          '<option value="3" >San Francisco</option>' .
          '</select>'; */
    }

}
