<?php
    use App\Models\Employee;
    $Employees = Employee::get();
    $json_data = array();
    foreach ($Employees as $Employee) {
        $json_data[$Employee->id] = $Employee->name;
    }
    $employee_data = json_encode($json_data);
?>

<label for="employee_id" class="control-label">{{ 'Employee' }}</label>
    <select required name="employee_id" class="form-control" id="employee_id" >
        @foreach (json_decode($employee_data, true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($employee->employee_id) && $employee->employee_id == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
<div class="form-group {{ $errors->has('department') ? 'has-error' : ''}}">
    <label for="department" class="control-label">{{ 'Department' }}</label>
    <input class="form-control" name="department" type="text" id="department" value="{{ isset($department->department) ? $department->department : ''}}" >
    {!! $errors->first('department', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jabatan') ? 'has-error' : ''}}">
    <label for="jabatan" class="control-label">{{ 'Jabatan' }}</label>
    <input class="form-control" name="jabatan" type="text" id="jabatan" value="{{ isset($department->jabatan) ? $department->jabatan : ''}}" >
    {!! $errors->first('jabatan', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('level') ? 'has-error' : ''}}">
    <label for="level" class="control-label">{{ 'Level' }}</label>
    <input class="form-control" name="level" type="text" id="level" value="{{ isset($department->level) ? $department->level : ''}}" >
    {!! $errors->first('level', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
