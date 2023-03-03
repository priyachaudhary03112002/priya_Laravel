<?php


    class model
    {
        public $conn="";
        function __construct()
        {
            
           
        $this->conn=new mysqli('localhost','root','','bookmycar');    
            
        }

       function select($tbl)

       {
            
        $sel="select * from $tbl";
        $run=$this->conn->query($sel);
        while($fetch=$run->fetch_object())
         {
            $arr[]=$fetch;
         }

         return $arr;
       }
      
       function select_join($tbl1,$tbl2,$on)
	{
		$sel="select * from $tbl1 join $tbl2 on $on";  // query 
		$run=$this->conn->query($sel);  // query Run
		while($fetch=$run->fetch_object()) // fetch_object() all data from database
		{
			$arr[]=$fetch;
		}
		return $arr;
	}
    
        //Sir Code Copied Here
        function insert($tbl,$arr)
        {
            $col_arr=array_keys($arr);
            $col=implode(",",$col_arr); //name,mobile,password
            
            $val_arr=array_values($arr);
            $values=implode("','",$val_arr); // 'rajesh','972204171','123'
            
            $ins="insert into $tbl($col) values('$values')";  // query 
            $run=$this->conn->query($ins);  // query Run
            return $run;
        }

        function select_where($tbl,$where) 
        {
           $col_arr=array_keys($where);
           $val_arr=array_values($where);
           $sel="select * from $tbl where 1=1"; // query continue
           $i=0;
           foreach($where as $d)
           {
                
             $sel.=" and $col_arr[$i]='$val_arr[$i]'";
            $i++;
 
           }
 
           $run=$this->conn->query($sel);
           return $run;
 
 
 
        }
        
        function delete_where($tbl,$where)
         {
            $col_arr=array_keys($where);
            $val_arr=array_values($where);
               
            $del="delete from $tbl where 1=1"; // query continue
            $i=0;
            foreach($where as $d)
             {
                 $del.=" and $col_arr[$i]='$val_arr[$i]'";
                $i++;
             }
               $run=$this->conn->query($del);
               return $run;
           }

           function update($tbl,$data,$where)
           {
               $upd="update $tbl set ";
               $darray_key=array_keys($data);
               $darray_values=array_values($data);
               $i=0;
               
               $count=count($data); 
               foreach($data as $d)
               {
                   if($count==$i+1)
                   {
                       $upd.= "$darray_key[$i]='$darray_values[$i]'";
                   }
                   else
                   {
                       $upd.= "$darray_key[$i]='$darray_values[$i]',";
                       $i++;
                   }
               }
               $array_key=array_keys($where);
               $array_values=array_values($where);
               
               $upd.=" where 1=1"; // 1=1 means query continue
               $i=0;
               foreach($where as $w)
               {
                   $upd.=" and $array_key[$i]='$array_values[$i]'";
                   $i++;
               }
               $run=$this->conn->query($upd);
               return $run;
               
           }



    }
    
    $obj=new model;
    
    



?>