
<p>Other children in family</p> 

<p>Please describe the other children in the family by name, gender, date of birth, school, Grade, and Email Address.</p>
<p>&nbsp;</p>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="table-striped table-bordered table-condensed">
  <tr>
    <th>Name</th>
    <th>Gender</th>
    <th>Date of Birth</th>
    <th>School</th>
    <th >Grade</th>
    <th>Camp</th>
    <th>Email</th>
  </tr>
  <tr>
    <td>

      {{Form::text('Child1a',null,['class'=>'form-control ','maxlength'=>'100'])}}
    </td>
    <td>

<div class="radio">
<label>{{Form::radio('Child1b','Male',false,  ['id'=>'Child1b_0', 'class'=>'radio '])}}
M</label></div>
<div class="radio">
<label>
{{Form::radio('Child1b','Female',false,  ['id'=>'Child1b_1', 'class'=>'radio '])}}
F</label>
</div>
     </td>
    <td>

{{Form::text('Child1c',null,['class'=>'form-control ','maxlength'=>'100'])}}
   </td>
    <td>

{{Form::text('Child1d',null,['class'=>'form-control ','maxlength'=>'100'])}}

    </td>
    <td>

{{Form::text('Child1e',null,['class'=>'form-control ','maxlength'=>'20'])}}
    </td>


    <td>{{Form::text('Child1f',null,['class'=>'form-control ','maxlength'=>'50'])}}
      </td>
    <td>{{Form::email('Child1g',null,['class'=>'form-control ','maxlength'=>'50'])}}
     
      </td>
  </tr>
  <tr>
   <td>
     
{{Form::text('Child2a',null,['class'=>'form-control ','maxlength'=>'100'])}}


    </td>
    
    <td>
<div class="radio">
<label>
{{Form::radio('Child2b','Male',false,  ['id'=>'Child2b_0', 'class'=>'radio '])}}
M</label>
</div>
<div class="radio">
<label>
{{Form::radio('Child2b','Female',false,  ['id'=>'Child2b_1', 'class'=>'radio '])}}
F</label></div>
</td>
    <td>
    
    {{Form::text('Child2c',null,['class'=>'form-control ','maxlength'=>'100'])}}

  </td>
    <td>{{Form::text('Child2d',null,['class'=>'form-control ','maxlength'=>'100'])}}

      </td>
    <td>{{Form::text('Child2e',null,['class'=>'form-control ','maxlength'=>'20'])}}

      </td>
    <td>
{{Form::text('Child2f',null,['class'=>'form-control ','maxlength'=>'50'])}}

    </td>
    <td>{{Form::text('Child2g',null,['class'=>'form-control ','maxlength'=>'50'])}}

    
    </td>
  </tr>
  <tr>
    <td>{{Form::text('Child3a',null,['class'=>'form-control ','maxlength'=>'100'])}}

</td>
    <td>
<div class="radio">
<label>
{{Form::radio('Child3b','Male',false,  ['id'=>'Child3b_0', 'class'=>'radio '])}}
M</label>
</div>
<div class="radio">
<label>
{{Form::radio('Child3b','Female',false,  ['id'=>'Child3b_1', 'class'=>'radio '])}}
F
</label>
</div></td>
    <td>{{Form::text('Child3c',null,['class'=>'form-control ','maxlength'=>'100'])}}
    
    </td>
    <td>
{{Form::text('Child3d',null,['class'=>'form-control ','maxlength'=>'100'])}}
     </td>
    <td>{{Form::text('Child3e',null,['class'=>'form-control ','maxlength'=>'20'])}}
      </td>
    <td>{{Form::text('Child3f',null,['class'=>'form-control ','maxlength'=>'50'])}}
      </td>
   <td>
{{Form::text('Child3g',null,['class'=>'form-control ','maxlength'=>'50'])}}
    
    </td>
  </tr>
  <tr>
    <td>
    {{Form::text('Child4a',null,['class'=>'form-control ','maxlength'=>'100'])}}
      </td>
    <td>
<div class="radio">
<label>
{{Form::radio('Child4b','Male',false,  ['id'=>'Child4b_0', 'class'=>'radio '])}}
M</label>
</div>

<div class="radio">
<label>
{{Form::radio('Child4b','Female',false,  ['id'=>'Child4b_1', 'class'=>'radio '])}}
F</label></div>
</td>
    <td>{{Form::text('Child4c',null,['class'=>'form-control ','maxlength'=>'100'])}}
  
    </td>
    <td>{{Form::text('Child4d',null,['class'=>'form-control ','maxlength'=>'100'])}}</td>
    <td>{{Form::text('Child4e',null,['class'=>'form-control ','maxlength'=>'20'])}}</td>
    <td>
{{Form::text('Child4f',null,['class'=>'form-control ','maxlength'=>'50'])}}
    </td>
    <td>
    {{Form::text('Child4g',null,['class'=>'form-control ','maxlength'=>'50'])}}

    </td>
  </tr>
  <tr>
   <td>{{Form::text('Child5a',null,['class'=>'form-control ','maxlength'=>'100'])}}
    </td>
    <td>
<div class="radio">
<label>
{{Form::radio('Child5b','Male',false,  ['id'=>'Child5b_0', 'class'=>'radio '])}}
M</label></div>
<div class="radio">
<label>
{{Form::radio('Child5b','Female',false,  ['id'=>'Child5b_1', 'class'=>'radio '])}}
F</label></div>
</td>
    <td>{{Form::text('Child5c',null,['class'=>'form-control ','maxlength'=>'100'])}}
    
    </td>
    <td>{{Form::text('Child5d',null,['class'=>'form-control ','maxlength'=>'100'])}}
     </td>
    <td>{{Form::text('Child5e',null,['class'=>'form-control ','maxlength'=>'20'])}}
      </td>
    <td>{{Form::text('Child5f',null,['class'=>'form-control ','maxlength'=>'50'])}}
      </td>
    <td>{{Form::text('Child5g',null,['class'=>'form-control ','maxlength'=>'50'])}}
    
    </td>
  </tr>
</table>
<h3>Additional Family Information</h3>
<div class="form-group">


<label>Are you affiliated with a Synagogue?</label>
<label class="radio-inline">
  {{Form::radio('SynAffiliation','1',false,  ['id'=>'SynAffiliation_0', 'class'=>'radio ','required'])}}Yes</label>  
  
<label class="radio-inline" for="SynAffiliation_1">
  
  {{Form::radio('SynAffiliation','0',false,  ['id'=>'SynAffiliation_1', 'class'=>'radio '])}}
No</label>
  </div>
<div class="form-group">  

  <label for "SynName">Name of Synagogue</label>
  {{Form::text('SynName',null,['class'=>'form-control ','maxlength'=>'50'])}}
  </div>
<div class="form-group">
  <label for "SynRabbi"> Rabbi</label>
    {{Form::text('SynRabbi',null,['class'=>'form-control ','maxlength'=>'50'])}}

  </div>
  <div class="form-group">
<label for "RabbiTel"> Phone No</label>
   {{Form::text('RabbiTel',null,['class'=>'form-control ','maxlength'=>'50'])}}

 </div>
 <div class="form-group">
  <label for="shabbaton" class="big">*Would you be interested in attending a family or adult shabbaton?</label> 
<label class="radio-inline">
  
  {{Form::radio('IntFamShabbaton','1',false,  ['id'=>'IntFamShabbaton_0', 'class'=>'radio ','required'])}}Yes</label>  

<label class="radio-inline">
  {{Form::radio('IntFamShabbaton','0',false,  ['id'=>'IntFamShabbaton_1', 'class'=>'radio '])}}
  No</label>
</div>
