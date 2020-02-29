<template>
       <div>
        <div class="form-group">
            <label>Batsman team</label>

            <select name="batsman_id">

                <option value=""></option>

            </select>
        </div>
        <div class="form-group">
            <label>Bowler team</label>
            <select name="bowler_id">

                <option value=""></option>

            </select>
        </div>

        <div class="form-group">

            <button class="btn btn-primary" type="submit" @click="matchButtonClick">Create</button>
        </div>
       </div>
</template>

<script>
    export default {
        mounted() {
            console.log('MAtch added mounted.')
        },
        matchButtonClick()
        {
            alert('okey');
        }
    }
</script>
