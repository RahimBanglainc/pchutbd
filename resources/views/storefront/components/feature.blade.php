<table width="100%" cellpadding="0" cellspacing="1" style="border:1px solid;">
    <tbody>
        <tr>
            <td width="100%" align="left" class="profileDetail" colspan="2"><b>Item Features</b> (Please fill up all
                these features)</td>
        </tr>

        @foreach($features as $key => $feature)

            <tr style="background-color:#EFF0F2;">
                <td width="50%" align="left" class="profileDetail"><input type="hidden" name="feature_id[{{$key}}]"
                        value="{{ $feature->id }}">{{ $feature->name }}</td>
                <td width="40%" align="left" class="profileDetail"><input type="text" name="value[{{$key}}]" value=""
                        size="20" maxlength="400"></td>
            </tr>

        @endforeach

        <tr>
            <td width="50%" align="left" class="profileDetail"><input type="hidden" name="" value="170">Warranty</td>
            <td width="40%" align="left" class="profileDetail"><input type="text" name="warranty" value="" size="20"
                    maxlength="400"></td>
        </tr>
    </tbody>
</table><input type="hidden" name="rowCount" value="{{$features->count()}}">
