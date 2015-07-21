<h3>Регистрация на конференцию</h3>
<div class="register">
    <form method="post" action="/register/complete/">
        <label>ФИО: <input name="fio"></label>
        <label>Email: <input name="email"></label>
        <label>Телефон: <input name="phone"></label>
        <label>Город: <input name="city"></label>
        <label>Конференция:
            <select name="conference_id">
                <?foreach($conferences as $conference){?>
                <option value="<?=$conference->id?>"><?=$conference->title?></option>
                <?}?>
            </select>
        </label>
        <label>Статус:
            <select name="reg-status">
                <option value="0">Слушатель</option>
                <option value="1">Докладчик</option>
            </select>
        </label>
        <label>Деятельность:
            <select name="activities">
                <option value="1">Преподаватели</option>
                <option value="2">Научные сотрудники</option>
                <option value="3">Инженеры</option>
                <option value="4">Студент</option>
                <option value="5">Аспирант</option>
            </select>
        </label>
        <label class="status-docl hidden">Выбор рабочего языка:
            <select name="reg-lang">
                <option value="1">Русский язык</option>
                <option value="2">Английский язык</option>
            </select>
        </label>
        <label class="status-docl hidden">Название доклада: <input name="report_name"></label>
        <label class="status-docl hidden">Страниц в докладе*: <input name="report_size"><br><small>* - Добавляет к сумме оплаты 10р за 1 страницу.</small></label>
        <label class="status-docl hidden">Количество дней проживания*: <input name="days"><br><small>* - Добавляет к сумме оплаты 1 000р за 1 день проживания.</small></label>
        <label class="status-docl hidden"><input type="checkbox" name="additional_activity"> Включить культурные мероприятия*<br><small>* - Включает в себя дополнительную программу мероприятий. Стоимость: 3 000р</small></label>
        <label class="status-reg-lang hidden"><input type="checkbox" name="report_scopus"> Размещение в международной наукометрической базе SCOPUS</label>

        <label>Сумма к оплате: <b class="summoney">0</b>р</label>
        <label><button>Регистрация</button></label>
    </form>
</div>
<script>
    var register_conference_coast = {
    <?foreach($conferences as $conference){?>
        <?=$conference->id?>: <?=$conference->coast?>,
    <?}?>};
    var register_data = {
        days: 0,
        coast: 0,
        size: 0,
        coast_conf: 0
    };
    var calculate = function () {
        var sum = register_data.coast+register_data.days*1000+register_data.size*10+register_data.coast_conf;
        var activities = $('select[name=activities]');
        if(activities.val() == '4' || activities.val() == '5') sum=sum-sum/10;
        $('b.summoney').text(sum);
    };
    $(document).ready(function(){

        $('.register input, .register select').on('change', function(){

        });

        $('select[name=activities]').on('change', function () {
            calculate();
        });

        $('select[name=reg-status]').on('change', function(){
            if($(this).val()=='1') {
                $('label.status-docl').removeClass('hidden').fadeIn(200)
            } else {
                $('label.status-docl').addClass('hidden').fadeOut(200)
            }
        });
        $('select[name=reg-lang]').on('change', function(){
            if($(this).val()=='2') {
                $('label.status-reg-lang').removeClass('hidden').fadeIn(200)
            } else {
                $('label.status-reg-lang').addClass('hidden').fadeOut(200)
            }
        });
        $('input[name=additional_activity]').on('change', function () {
           if($(this).is(':checked')) {
               register_data.coast +=3000;
           } else {
               register_data.coast -=3000;
           }
            calculate();
        });
        $('input[name=days]').on('change', function () {
            register_data.days = parseInt($(this).val());
            calculate();
        });
        $('input[name=report_size]').on('change', function () {
            register_data.size = parseInt($(this).val());
            calculate();
        });
        $('select[name=conference_id]').on('change', function () {
            register_data.coast_conf = register_conference_coast[parseInt($(this).val())];
            calculate();
        });
    });
</script>