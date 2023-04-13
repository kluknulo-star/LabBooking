<?php

namespace Database\Seeders\Application;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Group;
use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $students = [
            [
                'student_code' => 190238,
                'fio' => 'Бендер Е.А.',
                'group_id' => 1,
            ],
            [
                'student_code' => 191747,
                'fio' => 'Бровченко И.В.',
                'group_id' => 1,
            ],
            [
                'student_code' => 190230,
                'fio' => 'Величко И.О.',
                'group_id' => 1,
            ],
            [
                'student_code' => 190226,
                'fio' => 'Воробьев В.В.',
                'group_id' => 1,
            ],
            [
                'student_code' => 190228,
                'fio' => 'Губайдулин Д.Р.',
                'group_id' => 1,
            ],
            [
                'student_code' => 190231,
                'fio' => 'Гусева Д.А.',
                'group_id' => 1,
            ],
            [
                'student_code' => 191749,
                'fio' => 'Ибрагимов А.Ю.',
                'group_id' => 1,
            ],
            [
                'student_code' => 190048,
                'fio' => 'Калмыков Ю.В.',
                'group_id' => 1,
            ],
            [
                'student_code' => 191234,
                'fio' => 'Карасов Д.А.',
                'group_id' => 1,
            ],
            [
                'student_code' => 191308,
                'fio' => 'Киляков К.А.',
                'group_id' => 1,
            ],
            [
                'student_code' => 191307,
                'fio' => 'Колосова А.В.',
                'group_id' => 1,
            ],
            [
                'student_code' => 190232,
                'fio' => 'Колчина А.А.',
                'group_id' => 1,
            ],
            [
                'student_code' => 190239,
                'fio' => 'Кузнецова О.И.',
                'group_id' => 1,
            ],
            [
                'student_code' => 190235,
                'fio' => 'Курапов А.Д.',
                'group_id' => 1,
            ],
            [
                'student_code' => 190047,
                'fio' => 'Куртасов В.С.',
                'group_id' => 1,
            ],
            [
                'student_code' => 191750,
                'fio' => 'Мозгунова И.В.',
                'group_id' => 1,
            ],
            [
                'student_code' => 190250,
                'fio' => 'Морозова А.А.',
                'group_id' => 1,
            ],
            [
                'student_code' => 190236,
                'fio' => 'Мусенко А.Д.',
                'group_id' => 1,
            ],
            [
                'student_code' => 190008,
                'fio' => 'Тихоненко А.Р.',
                'group_id' => 1,
            ],
            [
                'student_code' => 190237,
                'fio' => 'Хрящева Е.А.',
                'group_id' => 1,
            ],
            [
                'student_code' => 190009,
                'fio' => 'Шинкарюк Г.С.',
                'group_id' => 1,
            ],
            [
                'student_code' => 199000,
                'fio' => 'Альбек Н.',
                'group_id' => 2,
            ],
            [
                'student_code' => 199001,
                'fio' => 'Бельков И.А.',
                'group_id' => 2,
            ],
            [
                'student_code' => 199002,
                'fio' => 'Берляков М.Д.',
                'group_id' => 2,
            ],
            [
                'student_code' => 199003,
                'fio' => 'Бурцева В.В.',
                'group_id' => 2,
            ],
            [
                'student_code' => 199004,
                'fio' => 'Вакилов К.М.',
                'group_id' => 2,
            ],
            [
                'student_code' => 199005,
                'fio' => 'Власенко В.А.',
                'group_id' => 2,
            ],
            [
                'student_code' => 199006,
                'fio' => 'Карпачевич А.А.',
                'group_id' => 2,
            ],
            [
                'student_code' => 199007,
                'fio' => 'Кеншинбаев Т.Б.',
                'group_id' => 2,
            ],
            [
                'student_code' => 199008,
                'fio' => 'Лунина О.А.',
                'group_id' => 2,
            ],
            [
                'student_code' => 199009,
                'fio' => 'Лушин В.Е.',
                'group_id' => 2,
            ],
            [
                'student_code' => 199010,
                'fio' => 'Мадатов Э.Р',
                'group_id' => 2,
            ],
            [
                'student_code' => 199011,
                'fio' => 'Марисов К.А.',
                'group_id' => 2,
            ],
            [
                'student_code' => 199012,
                'fio' => 'Мельник В.В.',
                'group_id' => 2,
            ],
            [
                'student_code' => 199012,
                'fio' => 'Низаев И.С.',
                'group_id' => 2,
            ],
            [
                'student_code' => 199013,
                'fio' => 'Новикова А.Д.',
                'group_id' => 2,
            ],
            [
                'student_code' => 199014,
                'fio' => 'Образциов А.В.',
                'group_id' => 2,
            ],
            [
                'student_code' => 199015,
                'fio' => 'Репин И.С.',
                'group_id' => 2,
            ],
            [
                'student_code' => 199017,
                'fio' => 'Рязанцева Р.А.',
                'group_id' => 2,
            ],
            [
                'student_code' => 199018,
                'fio' => 'Старцев А.П.',
                'group_id' => 2,
            ],
            [
                'student_code' => 199019,
                'fio' => 'Ступникова М.Д.',
                'group_id' => 2,
            ],
            [
                'student_code' => 199020,
                'fio' => 'Сыпачев К.В.',
                'group_id' => 2,
            ],
            [
                'student_code' => 199021,
                'fio' => 'Тихомирова Е.А.',
                'group_id' => 2,
            ],
            [
                'student_code' => 199022,
                'fio' => 'Тыщук Л.В.',
                'group_id' => 2,
            ],
            [
                'student_code' => 199023,
                'fio' => 'Федяков К.И.',
                'group_id' => 2,
            ],

        ];

        Student::insert($students);
    }
}
