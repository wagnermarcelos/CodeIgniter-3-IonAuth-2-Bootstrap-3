<div class="container">
        <h1 style="font-size:20pt">Ajax CRUD with Bootstrap modals and Datatables with  Bulk Delete</h1>

        <h3>Person Data</h3>
        <br />
        <button class="btn btn-success" onclick="add_person()"><i class="glyphicon glyphicon-plus"></i> Add Person</button>
        <button class="btn btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
        <button class="btn btn-danger" onclick="bulk_delete()"><i class="glyphicon glyphicon-trash"></i> Bulk Delete</button>
        <br />
        <br />
        <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th><input type="checkbox" id="check-all"></th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Date of Birth</th>
                    <th style="width:150px;">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>

            <tfoot>
            <tr>
                <th></th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Date of Birth</th>
                <th>Action</th>
            </tr>
            </tfoot>
        </table>
    </div>


<select onchange="javascript:window.location.href='<?php echo base_url(); ?>language_switcher/switchLang/'+this.value;">
    <option value="english" <?php if($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>English</option>
    <option value="portuguese" <?php if($this->session->userdata('site_lang') == 'portuguese') echo 'selected="selected"'; ?>>Portugues</option>   
</select>
<p><?php echo $this->lang->line('welcome_message'); ?></p>
</div>
