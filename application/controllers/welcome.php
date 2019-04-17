<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
            
        parent::__construct();
            
            //$this->load->model('user_model');            
        }
	public function index()
	{
            
            if(isset($_POST['virtual']) && $this->input->post('virtual') == 'Submit')
                {                  
                
                    
                    
//                    $a1=array("a"=>"red","b"=>"green");
//                    $a2=array("c"=>"blue","b"=>"yellow");                    
//                    $all = array_merge_recursive($a1,$a2);
//                    echo '<pre>';
//                    print_r($all);
//                    $complete = array();
//                    foreach ($all as $val)
//                    {
//                        if(is_array($val))
//                        {                        
//                            foreach ($val as $value)
//                            {
//                                echo $value."<br/>";                                
//                                //array_push($complete,$value);
//                            }                        
//                        }
//                        else{
//                            echo $val.'<br/>';                            
//                            //array_push($complete,$val);
//                        }
//                        
//                    }
//                    //echo '<pre>';
//                    //print_r($complete);
                    
                    
                    
//                    $a1=array("a"=>"red","b"=>"green");
//                    $a2=array("c"=>"blue","b"=>"yellow");
//                    echo '<pre>';
//                    print_r(array_merge($a1,$a2));
                
//                    function myfunction($v)
//                    {
//                    if ($v==="Dog")
//                       {
//                       return "Fido";
//                       }
//                    return $v;
//                    }
//
//                    $a=array("Horse","Dog","Cat");
//                    print_r(array_map("myfunction",$a));
                
                
//                    $a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
//                    echo '<pre>';
//                    print_r($a);
//                    echo '<pre>';
//                    print_r(array_keys($a,"Highlander"));
//                    print_r(array_keys($a));

                
//                $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
//                print_r($a1);
//                echo '<br/>';
//                $result=array_flip($a1);
//                print_r($result);
                
//                $a1=array_fill(1,4,"blue");
//                $b1=array_fill(0,1,"red");
//                print_r($a1);
//                echo "<br>";
//                print_r($b1);
//                echo "<br>";
//                print_r(array_merge($b1, $a1));
                
                
//                $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
//                $a2=array("e"=>"red","f"=>"black","g"=>"purple");
//                $a3=array("a"=>"red","b"=>"black","h"=>"yellow");
//
//                $result=array_diff($a1,$a2,$a3);
//                print_r($result);
                
//                $a=array("A","Cat","Dog","A","Dog");     
//                print_r(array_count_values($a));
                
//                $a = array(5698,4767);
//                $b = array('Griffin','Smith');
//                    
//                $last_names = array_combine($a, $b);
//                    echo '<pre>';                    
//                    print_r($last_names);
//                    foreach($last_names as $key => $val)
//                    {                              
//                      echo $key.$val."<br/>";                              
//                    }
//                
//                $a = array(
//                            array(
//                              'id' => 5698,
//                              'first_name' => 'Peter',
//                              'last_name' => 'Griffin',
//                            ),
//                            array(
//                              'id' => 4767,
//                              'first_name' => 'Ben',
//                              'last_name' => 'Smith',
//                            ),
//                            array(
//                              'id' => 3809,
//                              'first_name' => 'Joe',
//                              'last_name' => 'Doe',
//                            )
//                          );
//
//                          $last_names = array_column($a, 'last_name','id');
//                          echo '<pre>';
//                          print_r($last_names);
//                          foreach($last_names as $key => $val)
//                          {                              
//                            echo $key.$val."<br/>";                              
//                          }
                
                
//                    $cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");                    
//                    $chunk = array_chunk($cars,2);
                      //$chunk = array_chunk($cars,2,true);
//                    echo '<pre>';
//                    print_r($chunk);                    
//                    foreach($chunk as $key)
//                    {                        
//                        foreach($key as $val)
//                        {
//                            echo $val."<br/>";
//                        }
//                    }
//                    die;
                    $class_name = $this->input->post('class_name');
                    //$load_construct = $this->input->post('load_construct');
                    $construct_name = $this->input->post('construct_name');
                    //$form_validation = $this->input->post('form_validation');
                    $submit_button = $this->input->post('sub_name');
                    
                    //controller creation                          
                   $url = APPPATH ."controllers/";
                   
                   $virtual_controller = fopen($url.$class_name.".php", "w") or die("Unable to open file!");            
                                        
                    $class_data = "<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
                       \n\tclass ".ucwords($class_name)." extends CI_Controller {";                    
//                    if($load_construct=='Y'){
                        ?>
                        <?php $class_data .=   "\n\n\t\tfunction __construct(){
                            \n\t\tparent::__construct();";?>
                            <?php $class_data .= "\n\n\t\t".'$this->load->library("form_validation");'
                                    . "\n\n\t\t".'$this->load->helper("url");'
                                    . "\n\n\t\t".'$this->load->helper("form");'
                                    . "\n\n\t\t".'$this->load->helper("file");'?>
                            <?php 
                            if(preg_match('/,/',$construct_name))
                            {
                            $construct_name = explode(",",$construct_name);
                            foreach($construct_name as $val) {?><?php $class_data .= "\n\n\t\t".'$this->load->model("'.ucwords($val).'");'; }
                            }
                            else{                              
                              $class_data .= "\n\n\t\t".'$this->load->model("'.ucwords($construct_name).'");';
                            }                            
                            $class_data .= "\n\n\t\t".'$this->load->model("'.ucwords($class_name)."Model".'");';
                            $class_data .= "\n\t\t}";
//                    }
                    
                    $class_data .= "\n\n\t\tpublic function index(){";                   
                    $class_data .= "\n\n\t\t".'if(isset($_POST["'.$submit_button.'"]))'
                                    . "\n\n\t\t".'{';
                                    
//                    if($form_validation=="Y"){
                        $query_table = $this->db->query("select * from ".$class_name." ");
                        $field_array = $query_table->list_fields($class_name);
                        $field_count = count($field_array);
                        $column_struct = $this->db->field_data($class_name);                        
                        $column_count = count($column_struct);
                        $validation_data="";
                        $pk="";
                        
                         for($i=0;$i<$field_count;$i++){
                            if (preg_match('/_/',$field_array[$i]))
                            {
                                $validation_msg = str_replace("_", " ", $field_array[$i]);
                            }
                            else{
                              $validation_msg = $field_array[$i];  
                            }
                             $class_data1 = "\n\n\t\t".'$this->form_validation->set_rules("'.$field_array[$i].'", "'.ucwords($validation_msg).'", "required|xss_clean|trim';
                            for($j=0;$j<$column_count;$j++)
                            {                                
                                if($j>0){                                    
                                    break;
                                }
                                if($column_struct[$i]->primary_key==1 || $column_struct[$i]->type=='timestamp')
                                {                           
                                    $class_data1 = '';
                                    $pk = $field_array[$i];
                                }
                                else{
                                    if($column_struct[$i]->type=='varchar' || $column_struct[$i]->type=='int')
                                    {
                                    $class_data2 = '|max_length['.$column_struct[$i]->max_length.']';
                                    }
                                    if($column_struct[$i]->type=="int")
                                    {                           
                                        $class_data2 .= '|integer';
                                    }
                                    if($column_struct[$i]->type=="date" || $column_struct[$i]->type=="datetime")
                                    {                           
                                        $class_data2 = '';
                                    }
                                    $class_data1 .= $class_data2.'");';                                    
                                }
                                
                            }                            
                           $class_data .= $class_data1;
                        }
//                    }
                    $isset = "";
                    $class_data .= "\n\n\t\t\t".'if ($this->form_validation->run() == FALSE)
                        {    
                            $retrive_data["editData"]="";
                            $retrive_data["all_data"] = $this->'.ucwords($class_name)."Model".'->Retrieve();
                            $this->load->view("header");
                            $this->load->view("'.$class_name.'",$retrive_data);//empty validation
                            $this->load->view("footer");
                        }';
                    $isset .= 'else{';
                    $isset .= "\n\t\t\t\t\t".'$data = array(';
                            $column_struct_isset = $this->db->field_data($class_name);                            
                            for($q=0;$q<count($column_struct_isset);$q++)
                                {
                                if($column_struct_isset[$q]->primary_key!=1 && $column_struct_isset[$q]->type!='timestamp')
                                {    
                                   
                                   for($r=$q;$r<=$q;$r++)
                                   {
                                    
                                    $isset .= '"';
                                    $isset .= $column_struct_isset[$r]->name;
                                    $isset .= '"=>';   
                                                                         
                                        $isset .= "\n\t\t\t\t\t".'$this->input->post("'.$column_struct_isset[$r]->name.'"),';
                                   
                                   }                                   
                                   
                                }
                                }
                            
                    $isset .= ');'."\n\t\t\t\t\t".'$create = $this->DummyModel->Create($data);';
                    $isset .= "\n\t\t\t\t\t".'if($create==1){';
                    $isset .= "\n\t\t\t\t\t".'$retrive_data["success"] = "Data Inserted";';                    
                    
                    $isset .= '}'."\n\t\t\t\t\t".'}';
                    $class_data .= $isset;
                    $class_data .= "\n\n\t\t".'}else{'."\n\n\t\t".' $retrive_data["editData"]="";'."\n\n\t\t".'$retrive_data["all_data"] = $this->'.ucwords($class_name)."Model".'->Retrieve();'."\n\n\t\t".'$this->load->view("header");'."\n\n\t\t".'$this->load->view("'.$class_name.'",$retrive_data);'."\n\n\t\t".'$this->load->view("footer");'."\n\n\t\t".'}';                    
                    $class_data .= "\n\t\t}\n\t";
                    $class_data .= "\n\t".'public function delete(){';
                    $class_data .= "\n\n\t\t".'$del=$this->'.ucwords($class_name)."Model".'->Delete($this->input->post("del_id"));';
                    $class_data .= "\n\n\t\t".'echo $del;';
                    $class_data .= "\n\t".'}';
                    $class_data .= "\n\t".'public function edit($id){';
                    $class_data .= "\n\n\t\t".'$get_data["editData"]=$this->'.ucwords($class_name)."Model".'->RetrieveWhere($id);';
                    $class_data .= "\n\n\t\t".'$this->load->view("header");';                    
                    $class_data .= "\n\n\t\t".'$this->load->view("'.$class_name.'",$get_data);';
                    $class_data .= "\n\n\t\t".'$this->load->view("footer");';
                    $class_data .= "\n\t".'}';
                    $class_data .= "\n".'}';
                    fwrite($virtual_controller, $class_data);
                    fclose($virtual_controller);
                      //end controller
                     
                      //model creation                    
                    $model_url = APPPATH ."models/";
                   
                    $virtual_model = fopen($model_url.$class_name."Model.php", "w") or die("Unable to open file!");
                    $model_data = "<?php\n\tclass ".ucwords($class_name)."Model extends CI_Model {";
                    $model_data .= "\n\n\t\tpublic function Create(".'$postdata'."){";
                    $model_data .= "\n\n\t\t\t".'$query = $this->db->insert("'.$class_name.'",$postdata);'
                            . "\n\n\t\t\t".'if($query)'
                            . "\n\n\t\t\t".'{return 1;}'
                            . "\n\n\t\t\t".'}';
                    
                    $model_data .= "\n\n\t\tpublic function Retrieve(){"
                                    . "\n\n\t\t\t".'$query = $this->db->get("'.$class_name.'");'
                                    . "\n\n\t\t\t".'return $query->result();'
                                    . "\n\n\t\t\t".'}';
                    
                    $model_data .= "\n\n\t\t".'public function RetrieveWhere($id){'
                                    . "\n\n\t\t\t".'$query = $this->db->get_where("'.$class_name.'",array("'.$pk.'"=>$id));'
                                    . "\n\n\t\t\t".'return $query->row();'
                                    . "\n\n\t\t\t".'}';
                    
                    $model_data .= "\n\n\t\t".'public function Update($id){'
                                    . "\n\n\t\t\t".'$query = $this->db->update("'.$class_name.'",$data,array("'.$pk.'"=>$id));'
                                    . "\n\n\t\t\t".'return 1;'
                                    . "\n\n\t\t\t".'}';
                    
                    $model_data .= "\n\n\t\t".'public function Delete($id){'
                                    . "\n\n\t\t\t".'$query = $this->db->delete("'.$class_name.'",array("'.$pk.'"=>$id));'
                                    . "\n\n\t\t\t".'return 1;'
                                    . "\n\n\t\t\t".'}';
                    
                    $model_data .= "\n\n\t\t".'}';
                    fwrite($virtual_model, $model_data);
                    fclose($virtual_model);
                     //end model
                    
                    //view creation                    
                   $model_url = APPPATH ."views/";
                   
                    $query_table_view = $this->db->query("select * from ".$class_name." ");
                    $field_array_view = $query_table_view->list_fields($class_name);
                    $count_field_array_view = count($field_array_view);
                    $column_struct_view = $this->db->field_data($class_name);                        
                    $column_count_view = count($column_struct_view);
                    
                   $virtual_view = fopen($model_url.$class_name.".php", "w") or die("Unable to open file!");
                    $view_data = '
                        <body>
        <div class="container" style="border: 1px solid #D0D0D0;-webkit-box-shadow: 0 0 8px #D0D0D0;">
            <h2 style="border-bottom: 1px solid #D0D0D0;">Welcome to CodeIgniter!</h2>
<?php
        $form_data = array("name"=>"'.$class_name.'","id"=>"scoffolding","role"=>"form","class"=>"form-horizontal");
        echo form_open(base_url("'.$class_name.'"),$form_data);?>';
        $view_data1="";
        $view_data_array="";
        $view_data_array_dropdown ="";        
         for($i=0;$i<$count_field_array_view;$i++)
         {          
            for($j=0;$j<$column_count_view;$j++)
             {
                 if($column_struct_view[$i]->primary_key==1 || $column_struct_view[$i]->type=='timestamp')
                 {
                    $view_data1 = '';                    
                 }
                 else{                     
                        $view_data1 = "\n\t".'<div class="form-group">'; 
                        $view_data1 .= "\n\t".'<label class="control-label col-sm-2">'.ucwords($field_array_view[$i]).'</label>'."\n\t";
                        $view_data1 .= "\n\t".'<div class="col-sm-10">';
                    
                    if($column_struct_view[$i]->max_length>30)
                    {
                       $view_data_array = "\n\t".'<?php if(isset($editData)&& !empty($editData)){ $data = array("name"=>"'.$field_array_view[$i].'","id"=>"'.$field_array_view[$i].'","class"=>"form-control","value"=>$editData->'.$field_array_view[$i].');}'; 
                       $view_data_array .= "\n\t".'else{ $data = array("name"=>"'.$field_array_view[$i].'","id"=>"'.$field_array_view[$i].'","class"=>"form-control");}'; 
                       $view_data_array .= "\n\t".'echo form_textarea($data);';
                    }
                    if($column_struct_view[$i]->type=='enum')
                    {
                        $query_full = $this->db->query("SHOW FULL COLUMNS FROM ".$class_name." ");
                        $comment_result=$query_full->result();
                        $view_data_array_dropdown = "\n\t".'<?php $data = array(';
                        foreach($comment_result as $enum_comment)
                        {
                            $comment = $enum_comment->Comment;
                            if(strpos($comment,','))
                            {
                                $all_data = explode(",",$comment);
                                foreach ($all_data as $key => $value)
                                {
                                    $mix_string = str_replace("=","",$value);                                
                                    $int_value = preg_replace('/[a-zA-Z]/', '', $mix_string);
                                    $view_data_array_dropdown .= "'$int_value'"."=>";
                                    $string_value = preg_replace("/[0-9]/", "", $mix_string);
                                    $view_data_array_dropdown .= "'$string_value'";
                                    if($key < count($all_data)-1)
                                    {
                                        $view_data_array_dropdown .= ",";
                                    }
                                }                           
                            }
                        }
                        
                        
                       $view_data_array = $view_data_array_dropdown.');';
                       $view_data_array .= "\n\t".'echo form_dropdown("'.$field_array_view[$i].'",$data);';
                    }
                    if($column_struct_view[$i]->max_length<30 && $column_struct_view[$i]->type!='enum' && $column_struct_view[$i]->type!='date'){
                        $view_data_array = "\n\t".'<?php if(isset($editData)&& !empty($editData)){ $data = array("name"=>"'.$field_array_view[$i].'","id"=>"'.$field_array_view[$i].'","class"=>"form-control","value"=>$editData->'.$field_array_view[$i].');}';
                        $view_data_array .= "\n\t".'else{$data = array("name"=>"'.$field_array_view[$i].'","id"=>"'.$field_array_view[$i].'","class"=>"form-control");}';
                        $view_data_array .= "\n\t".'echo form_input($data);';               
                    }
                    if($column_struct_view[$i]->type=='date'){                        
                        $view_data_array = "\n\t".'<?php $data = array("type"=>"date","name"=>"'.$field_array_view[$i].'","id"=>"'.$field_array_view[$i].'","class"=>"form-control");';
                        $view_data_array .= "\n\t".'echo form_input($data);';               
                    }
                    if($column_struct_view[$i]->type=='datetime')
                    {
                        $view_data_array = "\n\t".'<?php $data = array("type"=>"datetime-local","name"=>"'.$field_array_view[$i].'","id"=>"'.$field_array_view[$i].'","class"=>"form-control");';
                        $view_data_array .= "\n\t".'echo form_input($data);';                   
                    }                        
                    $view_data1 .= $view_data_array;
                    $view_data1 .= "\n\t".'echo form_error("'.$field_array_view[$i].'");?>'."\n\t";
                    $view_data1 .= "\n\t"."</div></div>";
                 }
             }
            $view_data .= $view_data1;
         }
    $view_data .= "\n\t".'<div align="center" style="border-bottom: 1px solid #D0D0D0;">';
    $view_data .= "\n\t".'<input type="submit" name="'.$submit_button.'" class="btn btn-primary"/>';
    $view_data .= "\n\t".'</div>    
    <?php echo form_close();?>';
    $view_data_fetch ="";
    $view_data_fetch_table ="";
    $view_data_fetch .= "\n\t".'<?php if(isset($all_data) && !empty($all_data)){?>';
    $view_data_fetch .= "\n\t".'<div class="table-responsive">
                            <table class="table">
                                <tr>'
                                ."\n\t\t\t\t\t".'<td>S.No</td>';                    
                    $column_struct_view_td = $this->db->field_data($class_name);
                    $view_data_fetch_td="";
                                for($m=0;$m<count($column_struct_view_td);$m++)
                                {
                                if($column_struct_view_td[$m]->primary_key!=1 && $column_struct_view_td[$m]->type!='timestamp')
                                {    
                                   $view_data_fetch_td .= "\n\t\t\t\t\t".'<td>';
                                   for($n=$m;$n<=$m;$n++)
                                   {
                                       
                                     if (preg_match('/_/',$column_struct_view_td[$n]->name))
                                    {
                                        $view_data_fetch_td .= str_replace("_", " ", ucwords($column_struct_view_td[$n]->name));
                                    }  
                                    else{
                                        $view_data_fetch_td .= ucwords($column_struct_view_td[$n]->name);
                                    }  
                                   }                                   
                                   $view_data_fetch_td .= '</td>';
                                }
                                }
                                $view_data_fetch_td .= "\n\t\t\t\t\t".'<td>Action</td>';
                                $view_data_fetch_td .= "\n\t\t\t\t".'</tr>';
                                
                                $column_struct_view_fetch_td = $this->db->field_data($class_name);
                                $column_struct_view_fetch_td_file ="";
                                $column_struct_view_fetch_td_file_java_script ="";
                                $view_data_fetch_table .= $view_data_fetch_td."\n\t\t\t\t".'<?php $i=1; foreach($all_data as $row){?> 
                                    <tr>
                                        <td><?php echo $i;?></td>';
                                        for($l=0;$l<count($column_struct_view_fetch_td);$l++)
                                {
                                if($column_struct_view_fetch_td[$l]->primary_key!=1 && $column_struct_view_fetch_td[$l]->type!='timestamp')
                                {    
                                   $column_struct_view_fetch_td_file .= "\n\t\t\t\t\t".'<td>';
                                   for($p=$l;$p<=$l;$p++)
                                   {                                     
                                     
                                        $column_struct_view_fetch_td_file .= "<?php echo ".'$row->'.$column_struct_view_fetch_td[$p]->name.";?>";                                        
                                    
                                   }                                   
                                   $column_struct_view_fetch_td_file .= '</td>';
                                }
                                if($column_struct_view_fetch_td[$l]->primary_key==1)
                                {
                                    $column_struct_view_fetch_td_file_java_script .= "\n\t\t\t\t\t".'<input type="hidden" name="uid" value="<?php echo $row->'.$column_struct_view_fetch_td[$l]->name.';?>"/>';
                                    $column_struct_view_fetch_td_file_java_script .= "\n\t\t\t\t\t".'<td><a href="<?php echo base_url()."'.$class_name.'/edit/".$row->'.$column_struct_view_fetch_td[$l]->name.';?>">Edit</a> / <a href="javascript:;" onclick="del(<?php echo $row->'.$column_struct_view_fetch_td[$l]->name.';?>);">Delete</a></td>';
                                }
                                }
                                    $view_data_fetch_table .= $column_struct_view_fetch_td_file;
                                    $view_data_fetch_table .= $column_struct_view_fetch_td_file_java_script;
                                    $view_data_fetch_table .= "\n\t\t\t\t\t".'</tr>
                                <?php $i++; }?>
                            </table>
                        </div> <?php }?>';
                             
                             $view_data_fetch .= $view_data_fetch_table;
                                                  
    $view_data_fetch .='<p class="pull-right">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
    </div></body>';
    
    $view_data_script="";
    $view_data_script .= "\n\t\t".'<script>';
    $view_data_script .= "\n\t\t\t".'function del(id){';
    $view_data_script .= "\n\t\t\t".'var answer=confirm("Are You Sure?");';
    $view_data_script .= "\n\t\t\t".'if(answer){';
    $view_data_script .= "\n\t\t\t".'$.ajax({';
    $view_data_script .= "\n\t\t\t\t".'type: "POST",';
    $view_data_script .= "\n\t\t\t\t".'url: "<?php echo base_url();?>'.$class_name.'/delete",';
    $view_data_script .= "\n\t\t\t\t".'data: {"<?php echo $this->security->get_csrf_token_name(); ?>":"<?php echo $this->security->get_csrf_hash(); ?>",del_id:id},';
    $view_data_script .= "\n\t\t\t\t".'success: function(return_data)
               {                   
                   if(return_data==1)
                   {
                    alert("Successfully Deleted");
                    location.reload();
                   }
               }
           });';
    $view_data_script .= "\n\t\t\t".'}';
    $view_data_script .= "\n\t\t\t".'}';
    $view_data_script .= "\n\t\t".'</script>';
    $view_data_fetch .= $view_data_script;
    $view_data .= $view_data_fetch;
                    fwrite($virtual_view, $view_data);
                   fclose($virtual_view);
                    //end view
                    
                }
            
		$this->load->view('welcome_message');
	}
        
}