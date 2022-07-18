<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiTietPhongSeeder extends Seeder
{

    public function run()
    {
        DB::table('chi_tiet_phongs')->delete();

        DB::table('chi_tiet_phongs')->truncate();

        DB::table('chi_tiet_phongs')->insert([
            [
                'id_phong' => 4,
                'ten_phong' => 'A001',
                'is_open' => 1,
                'noi_that' => '<table style="width: 304px;" border="1" width="304">
                                <tbody>
                                <tr>
                                <td style="width: 59.8281px;"><strong>STT</strong></td>
                                <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">1</td>
                                <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                <td style="width: 106.25px;">4</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">2</td>
                                <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                <td style="width: 106.25px;">4</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">3</td>
                                <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">4</td>
                                <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">5</td>
                                <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                <td style="width: 106.25px;">4</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">6</td>
                                <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                <td style="width: 106.25px;">4</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">7</td>
                                <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                <td style="width: 106.25px;">4</td>
                                </tr>
                                <tr>
                                    <td style="width: 59.8281px;">8</td>
                                    <td style="width: 115.922px;">Gi&#432;&#7901;ng</td>
                                    <td style="width: 106.25px;">2</td>
                                </tr>
                                </tbody>
                                </table>'
            ],

            [
                'id_phong' => 4,
                'ten_phong' => 'A002',
                'is_open' => 1,
                'noi_that' => '<table style="width: 304px;" border="1" width="304">
                                <tbody>
                                <tr>
                                <td style="width: 59.8281px;"><strong>STT</strong></td>
                                <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">1</td>
                                <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                <td style="width: 106.25px;">1</td>
                            4   </tr>
                                <tr>
                                <td style="width: 59.8281px;">2</td>
                                <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                <td style="width: 106.25px;">2</td>
                            4   </tr>
                                <tr>
                                <td style="width: 59.8281px;">3</td>
                                <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                <td style="width: 106.25px;">1</td>
                            2   </tr>
                                <tr>
                                <td style="width: 59.8281px;">4</td>
                                <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                <td style="width: 106.25px;">1</td>
                            2   </tr>
                                <tr>
                                <td style="width: 59.8281px;">5</td>
                                <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                <td style="width: 106.25px;">2</td>
                            4   </tr>
                                <tr>
                                <td style="width: 59.8281px;">6</td>
                                <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">7</td>
                                <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                <td style="width: 106.25px;">4</td>
                                </tr>
                                <tr>
                                    <td style="width: 59.8281px;">8</td>
                                    <td style="width: 115.922px;">Gi&#432;&#7901;ng</td>
                                    <td style="width: 106.25px;">2</td>
                                </tr>
                                </tbody>
                                </table>'
            ],

            [
                'id_phong' => 4,
                'ten_phong' => 'A003',
                'is_open' => 1,
                'noi_that' => '<table style="width: 304px;" border="1" width="304">
                                <tbody>
                                <tr>
                                <td style="width: 59.8281px;"><strong>STT</strong></td>
                                <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">1</td>
                                <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                <td style="width: 106.25px;">4</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">2</td>
                                <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                <td style="width: 106.25px;">4</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">3</td>
                                <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">4</td>
                                <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">5</td>
                                <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                <td style="width: 106.25px;">4</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">6</td>
                                <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">7</td>
                                <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                <td style="width: 106.25px;">4</td>
                                </tr>
                                <tr>
                                    <td style="width: 59.8281px;">8</td>
                                    <td style="width: 115.922px;">Gi&#432;&#7901;ng</td>
                                    <td style="width: 106.25px;">2</td>
                                </tr>
                                </tbody>
                                </table>'
            ],

            [
                'id_phong' => 4,
                'ten_phong' => 'A004',
                'is_open' => 1,
                'noi_that' => '<table style="width: 304px;" border="1" width="304">
                                <tbody>
                                <tr>
                                <td style="width: 59.8281px;"><strong>STT</strong></td>
                                <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">1</td>
                                <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                <td style="width: 106.25px;">4</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">2</td>
                                <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                <td style="width: 106.25px;">4</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">3</td>
                                <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">4</td>
                                <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">5</td>
                                <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                <td style="width: 106.25px;">4</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">6</td>
                                <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">7</td>
                                <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                <td style="width: 106.25px;">4</td>
                                </tr>
                                <tr>
                                    <td style="width: 59.8281px;">8</td>
                                    <td style="width: 115.922px;">Gi&#432;&#7901;ng</td>
                                    <td style="width: 106.25px;">2</td>
                                </tr>
                                </tbody>
                                </table>'
            ],

            [
                'id_phong' => 4,
                'ten_phong' => 'A005',
                'is_open' => 1,
                'noi_that' => '<table style="width: 304px;" border="1" width="304">
                                <tbody>
                                <tr>
                                <td style="width: 59.8281px;"><strong>STT</strong></td>
                                <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">1</td>
                                <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                <td style="width: 106.25px;">4</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">2</td>
                                <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                <td style="width: 106.25px;">4</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">3</td>
                                <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">4</td>
                                <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">5</td>
                                <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                <td style="width: 106.25px;">4</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">6</td>
                                <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">7</td>
                                <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                <td style="width: 106.25px;">4</td>
                                </tr>
                                <tr>
                                    <td style="width: 59.8281px;">8</td>
                                    <td style="width: 115.922px;">Gi&#432;&#7901;ng</td>
                                    <td style="width: 106.25px;">2</td>
                                </tr>
                                </tbody>
                                </table>'
            ],

            //Khu B
            [
                'id_phong' => 3,
                'ten_phong' => 'B001',
                'is_open' => 1,
                'noi_that' => '<table style="width: 304px;" border="1" width="304">
                                <tbody>
                                <tr>
                                <td style="width: 59.8281px;"><strong>STT</strong></td>
                                <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">1</td>
                                <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">2</td>
                                <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">3</td>
                                <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">4</td>
                                <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">5</td>
                                <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">6</td>
                                <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">7</td>
                                <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                    <td style="width: 59.8281px;">8</td>
                                    <td style="width: 115.922px;">Gi&#432;&#7901;ng</td>
                                    <td style="width: 106.25px;">2</td>
                                </tr>
                                </tbody>
                                </table>'
            ],

            [
                'id_phong' => 3,
                'ten_phong' => 'B002',
                'is_open' => 1,
                'noi_that' => '<table style="width: 304px;" border="1" width="304">
                                <tbody>
                                <tr>
                                <td style="width: 59.8281px;"><strong>STT</strong></td>
                                <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">1</td>
                                <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">2</td>
                                <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">3</td>
                                <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">4</td>
                                <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">5</td>
                                <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">6</td>
                                <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">7</td>
                                <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                    <td style="width: 59.8281px;">8</td>
                                    <td style="width: 115.922px;">Gi&#432;&#7901;ng</td>
                                    <td style="width: 106.25px;">2</td>
                                </tr>
                                </tbody>
                                </table>'
            ],

            [
                'id_phong' => 3,
                'ten_phong' => 'B003',
                'is_open' => 1,
                'noi_that' => '<table style="width: 304px;" border="1" width="304">
                                <tbody>
                                <tr>
                                <td style="width: 59.8281px;"><strong>STT</strong></td>
                                <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">1</td>
                                <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">2</td>
                                <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">3</td>
                                <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">4</td>
                                <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">5</td>
                                <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">6</td>
                                <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">7</td>
                                <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                    <td style="width: 59.8281px;">8</td>
                                    <td style="width: 115.922px;">Gi&#432;&#7901;ng</td>
                                    <td style="width: 106.25px;">2</td>
                                </tr>
                                </tbody>
                                </table>'
            ],

            [
                'id_phong' => 3,
                'ten_phong' => 'B004',
                'is_open' => 1,
                'noi_that' => '<table style="width: 304px;" border="1" width="304">
                                <tbody>
                                <tr>
                                <td style="width: 59.8281px;"><strong>STT</strong></td>
                                <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">1</td>
                                <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">2</td>
                                <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">3</td>
                                <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">4</td>
                                <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">5</td>
                                <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">6</td>
                                <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">7</td>
                                <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                    <td style="width: 59.8281px;">8</td>
                                    <td style="width: 115.922px;">Gi&#432;&#7901;ng</td>
                                    <td style="width: 106.25px;">2</td>
                                </tr>
                                </tbody>
                                </table>'
            ],

            [
                'id_phong' => 3,
                'ten_phong' => 'B005',
                'is_open' => 1,
                'noi_that' => '<table style="width: 304px;" border="1" width="304">
                                <tbody>
                                <tr>
                                <td style="width: 59.8281px;"><strong>STT</strong></td>
                                <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">1</td>
                                <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">2</td>
                                <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">3</td>
                                <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">4</td>
                                <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">5</td>
                                <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">6</td>
                                <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">7</td>
                                <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                    <td style="width: 59.8281px;">8</td>
                                    <td style="width: 115.922px;">Gi&#432;&#7901;ng</td>
                                    <td style="width: 106.25px;">2</td>
                                </tr>
                                </tbody>
                                </table>'
            ],

            //Khu C

            [
                'id_phong' => 3,
                'ten_phong' => 'C001',
                'is_open' => 1,
                'noi_that' => '<table style="width: 304px;" border="1" width="304">
                                <tbody>
                                <tr>
                                <td style="width: 59.8281px;"><strong>STT</strong></td>
                                <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">1</td>
                                <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">2</td>
                                <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">3</td>
                                <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">4</td>
                                <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">5</td>
                                <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">6</td>
                                <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">7</td>
                                <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                    <td style="width: 59.8281px;">8</td>
                                    <td style="width: 115.922px;">Gi&#432;&#7901;ng</td>
                                    <td style="width: 106.25px;">2</td>
                                </tr>
                                </tbody>
                                </table>'
            ],

            [
                'id_phong' => 3,
                'ten_phong' => 'C002',
                'is_open' => 1,
                'noi_that' => '<table style="width: 304px;" border="1" width="304">
                                <tbody>
                                <tr>
                                <td style="width: 59.8281px;"><strong>STT</strong></td>
                                <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">1</td>
                                <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">2</td>
                                <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">3</td>
                                <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">4</td>
                                <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">5</td>
                                <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">6</td>
                                <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">7</td>
                                <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                    <td style="width: 59.8281px;">8</td>
                                    <td style="width: 115.922px;">Gi&#432;&#7901;ng</td>
                                    <td style="width: 106.25px;">2</td>
                                </tr>
                                </tbody>
                                </table>'
            ],

            [
                'id_phong' => 3,
                'ten_phong' => 'C003',
                'is_open' => 1,
                'noi_that' => '<table style="width: 304px;" border="1" width="304">
                                <tbody>
                                <tr>
                                <td style="width: 59.8281px;"><strong>STT</strong></td>
                                <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">1</td>
                                <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">2</td>
                                <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">3</td>
                                <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">4</td>
                                <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">5</td>
                                <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">6</td>
                                <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">7</td>
                                <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                    <td style="width: 59.8281px;">8</td>
                                    <td style="width: 115.922px;">Gi&#432;&#7901;ng</td>
                                    <td style="width: 106.25px;">2</td>
                                </tr>
                                </tbody>
                                </table>'
            ],

            [
                'id_phong' => 3,
                'ten_phong' => 'C004',
                'is_open' => 1,
                'noi_that' => '<table style="width: 304px;" border="1" width="304">
                                <tbody>
                                <tr>
                                <td style="width: 59.8281px;"><strong>STT</strong></td>
                                <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">1</td>
                                <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">2</td>
                                <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">3</td>
                                <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">4</td>
                                <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">5</td>
                                <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">6</td>
                                <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">7</td>
                                <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                    <td style="width: 59.8281px;">8</td>
                                    <td style="width: 115.922px;">Gi&#432;&#7901;ng</td>
                                    <td style="width: 106.25px;">2</td>
                                </tr>
                                </tbody>
                                </table>'
            ],

            [
                'id_phong' => 3,
                'ten_phong' => 'C005',
                'is_open' => 1,
                'noi_that' => '<table style="width: 304px;" border="1" width="304">
                                <tbody>
                                <tr>
                                <td style="width: 59.8281px;"><strong>STT</strong></td>
                                <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">1</td>
                                <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">2</td>
                                <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">3</td>
                                <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">4</td>
                                <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">5</td>
                                <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">6</td>
                                <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">7</td>
                                <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                <td style="width: 106.25px;">3</td>
                                </tr>
                                <tr>
                                    <td style="width: 59.8281px;">8</td>
                                    <td style="width: 115.922px;">Gi&#432;&#7901;ng</td>
                                    <td style="width: 106.25px;">2</td>
                                </tr>
                                </tbody>
                                </table>'
            ],

            //Khu D
            [
                'id_phong' => 2,
                'ten_phong' => 'D001',
                'is_open' => 1,
                'noi_that' => '<table style="width: 304px;" border="1" width="304">
                                <tbody>
                                <tr>
                                <td style="width: 59.8281px;"><strong>STT</strong></td>
                                <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">1</td>
                                <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">2</td>
                                <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">3</td>
                                <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">4</td>
                                <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">5</td>
                                <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">6</td>
                                <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">7</td>
                                <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                <td style="width: 106.25px;">4</td>
                                </tr>
                                <tr>
                                    <td style="width: 59.8281px;">8</td>
                                    <td style="width: 115.922px;">Gi&#432;&#7901;ng</td>
                                    <td style="width: 106.25px;">2</td>
                                </tr>
                                </tbody>
                                </table>'
            ],

            [
                'id_phong' => 2,
                'ten_phong' => 'D002',
                'is_open' => 1,
                'noi_that' => '<table style="width: 304px;" border="1" width="304">
                                <tbody>
                                <tr>
                                <td style="width: 59.8281px;"><strong>STT</strong></td>
                                <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">1</td>
                                <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">2</td>
                                <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">3</td>
                                <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">4</td>
                                <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">5</td>
                                <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">6</td>
                                <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">7</td>
                                <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                    <td style="width: 59.8281px;">8</td>
                                    <td style="width: 115.922px;">Gi&#432;&#7901;ng</td>
                                    <td style="width: 106.25px;">2</td>
                                </tr>
                                </tbody>
                                </table>'
            ],

            [
                'id_phong' => 2,
                'ten_phong' => 'D003',
                'is_open' => 1,
                'noi_that' => '<table style="width: 304px;" border="1" width="304">
                                <tbody>
                                <tr>
                                <td style="width: 59.8281px;"><strong>STT</strong></td>
                                <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">1</td>
                                <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">2</td>
                                <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">3</td>
                                <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">4</td>
                                <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">5</td>
                                <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">6</td>
                                <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">7</td>
                                <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                    <td style="width: 59.8281px;">8</td>
                                    <td style="width: 115.922px;">Gi&#432;&#7901;ng</td>
                                    <td style="width: 106.25px;">2</td>
                                </tr>
                                </tbody>
                                </table>'
            ],

            [
                'id_phong' => 2,
                'ten_phong' => 'D004',
                'is_open' => 1,
                'noi_that' => '<table style="width: 304px;" border="1" width="304">
                                <tbody>
                                <tr>
                                <td style="width: 59.8281px;"><strong>STT</strong></td>
                                <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">1</td>
                                <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">2</td>
                                <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">3</td>
                                <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">4</td>
                                <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">5</td>
                                <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">6</td>
                                <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">7</td>
                                <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                    <td style="width: 59.8281px;">8</td>
                                    <td style="width: 115.922px;">Gi&#432;&#7901;ng</td>
                                    <td style="width: 106.25px;">2</td>
                                </tr>
                                </tbody>
                                </table>'
            ],

            [
                'id_phong' => 2,
                'ten_phong' => 'D005',
                'is_open' => 1,
                'noi_that' => '<table style="width: 304px;" border="1" width="304">
                                <tbody>
                                <tr>
                                <td style="width: 59.8281px;"><strong>STT</strong></td>
                                <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">1</td>
                                <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">2</td>
                                <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">3</td>
                                <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">4</td>
                                <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">5</td>
                                <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">6</td>
                                <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">7</td>
                                <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                    <td style="width: 59.8281px;">8</td>
                                    <td style="width: 115.922px;">Gi&#432;&#7901;ng</td>
                                    <td style="width: 106.25px;">2</td>
                                </tr>
                                </tbody>
                                </table>'
            ],

            //Khu E

            [
                'id_phong' => 1,
                'ten_phong' => 'E001',
                'is_open' => 1,
                'noi_that' => '<table style="width: 304px;" border="1" width="304">
                                <tbody>
                                <tr>
                                <td style="width: 59.8281px;"><strong>STT</strong></td>
                                <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;"21</td>
                                <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;"22</td>
                                <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;"23</td>
                                <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">4</td>
                                <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;"25</td>
                                <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">6</td>
                                <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;"27</td>
                                <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                <td style="width: 106.25px;">4</td>
                                </tr>
                                <tr>
                                    <td style="width: 59.8281px;">8</td>
                                    <td style="width: 115.922px;">Gi&#432;&#7901;ng</td>
                                    <td style="width: 106.25px;">2</td>
                                </tr>
                                </tbody>
                                </table>'
            ],

            [
                'id_phong' => 1,
                'ten_phong' => 'E002',
                'is_open' => 1,
                'noi_that' => '<table style="width: 304px;" border="1" width="304">
                                <tbody>
                                <tr>
                                <td style="width: 59.8281px;"><strong>STT</strong></td>
                                <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">1</td>
                                <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">2</td>
                                <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">3</td>
                                <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">4</td>
                                <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">5</td>
                                <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">6</td>
                                <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">7</td>
                                <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                <td style="width: 106.25px;">4</td>
                                </tr>
                                <tr>
                                    <td style="width: 59.8281px;">8</td>
                                    <td style="width: 115.922px;">Gi&#432;&#7901;ng</td>
                                    <td style="width: 106.25px;">2</td>
                                </tr>
                                </tbody>
                                </table>'
            ],

            [
                'id_phong' => 1,
                'ten_phong' => 'E003',
                'is_open' => 1,
                'noi_that' => '<table style="width: 304px;" border="1" width="304">
                                <tbody>
                                <tr>
                                <td style="width: 59.8281px;"><strong>STT</strong></td>
                                <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">1</td>
                                <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">2</td>
                                <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">3</td>
                                <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">4</td>
                                <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                <td style="width: 106.25px;">0</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">5</td>
                                <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">6</td>
                                <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">7</td>
                                <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                    <td style="width: 59.8281px;">8</td>
                                    <td style="width: 115.922px;">Gi&#432;&#7901;ng</td>
                                    <td style="width: 106.25px;">2</td>
                                </tr>
                                </tbody>
                                </table>'
            ],

            [
                'id_phong' => 1,
                'ten_phong' => 'E004',
                'is_open' => 1,
                'noi_that' => '<table style="width: 304px;" border="1" width="304">
                                <tbody>
                                <tr>
                                <td style="width: 59.8281px;"><strong>STT</strong></td>
                                <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">1</td>
                                <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">2</td>
                                <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">3</td>
                                <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">4</td>
                                <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                <td style="width: 106.25px;">0</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">5</td>
                                <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">6</td>
                                <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">7</td>
                                <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                    <td style="width: 59.8281px;">8</td>
                                    <td style="width: 115.922px;">Gi&#432;&#7901;ng</td>
                                    <td style="width: 106.25px;">2</td>
                                </tr>
                                </tbody>
                                </table>'
            ],

            [
                'id_phong' => 1,
                'ten_phong' => 'E005',
                'is_open' => 1,
                'noi_that' => '<table style="width: 304px;" border="1" width="304">
                                <tbody>
                                <tr>
                                <td style="width: 59.8281px;"><strong>STT</strong></td>
                                <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">1</td>
                                <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">2</td>
                                <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">3</td>
                                <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">4</td>
                                <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                <td style="width: 106.25px;">0</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">5</td>
                                <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">6</td>
                                <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">7</td>
                                <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                    <td style="width: 59.8281px;">8</td>
                                    <td style="width: 115.922px;">Gi&#432;&#7901;ng</td>
                                    <td style="width: 106.25px;">2</td>
                                </tr>
                                </tbody>
                                </table>'
            ],

            //Khu F

            [
                'id_phong' => 1,
                'ten_phong' => 'F001',
                'is_open' => 1,
                'noi_that' => '<table style="width: 304px;" border="1" width="304">
                                <tbody>
                                <tr>
                                <td style="width: 59.8281px;"><strong>STT</strong></td>
                                <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;"11</td>
                                <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;"12</td>
                                <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                <td style="width: 106.25px;">2</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">3</td>
                                <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;"04</td>
                                <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                <td style="width: 106.25px;">0</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;"15</td>
                                <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;"16</td>
                                <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;"17</td>
                                <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                    <td style="width: 59.8281px;">8</td>
                                    <td style="width: 115.922px;">Gi&#432;&#7901;ng</td>
                                    <td style="width: 106.25px;">2</td>
                                </tr>
                                </tbody>
                                </table>'
            ],

            [
                'id_phong' => 1,
                'ten_phong' => 'F002',
                'is_open' => 1,
                'noi_that' => '<table style="width: 304px;" border="1" width="304">
                                <tbody>
                                <tr>
                                <td style="width: 59.8281px;"><strong>STT</strong></td>
                                <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">1</td>
                                <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">2</td>
                                <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">3</td>
                                <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">4</td>
                                <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                <td style="width: 106.25px;">0</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">5</td>
                                <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">6</td>
                                <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">7</td>
                                <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                    <td style="width: 59.8281px;">8</td>
                                    <td style="width: 115.922px;">Gi&#432;&#7901;ng</td>
                                    <td style="width: 106.25px;">2</td>
                                </tr>
                                </tbody>
                                </table>'
            ],

            [
                'id_phong' => 1,
                'ten_phong' => 'F003',
                'is_open' => 1,
                'noi_that' => '<table style="width: 304px;" border="1" width="304">
                                <tbody>
                                <tr>
                                <td style="width: 59.8281px;"><strong>STT</strong></td>
                                <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">1</td>
                                <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">2</td>
                                <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">3</td>
                                <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">4</td>
                                <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                <td style="width: 106.25px;">0</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">5</td>
                                <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">6</td>
                                <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">7</td>
                                <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                    <td style="width: 59.8281px;">8</td>
                                    <td style="width: 115.922px;">Gi&#432;&#7901;ng</td>
                                    <td style="width: 106.25px;">2</td>
                                </tr>
                                </tbody>
                                </table>'
            ],

            [
                'id_phong' => 1,
                'ten_phong' => 'F004',
                'is_open' => 1,
                'noi_that' => '<table style="width: 304px;" border="1" width="304">
                                <tbody>
                                <tr>
                                <td style="width: 59.8281px;"><strong>STT</strong></td>
                                <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">1</td>
                                <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">2</td>
                                <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">3</td>
                                <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">4</td>
                                <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                <td style="width: 106.25px;">0</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">5</td>
                                <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">6</td>
                                <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">7</td>
                                <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                    <td style="width: 59.8281px;">8</td>
                                    <td style="width: 115.922px;">Gi&#432;&#7901;ng</td>
                                    <td style="width: 106.25px;">2</td>
                                </tr>
                                </tbody>
                                </table>'
            ],

            [
                'id_phong' => 1,
                'ten_phong' => 'F005',
                'is_open' => 1,
                'noi_that' => '<table style="width: 304px;" border="1" width="304">
                                <tbody>
                                <tr>
                                <td style="width: 59.8281px;"><strong>STT</strong></td>
                                <td style="width: 115.922px;"><strong>T&ecirc;n Đồ D&ugrave;ng</strong></td>
                                <td style="width: 106.25px;"><strong>Số Lượng</strong></td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">1</td>
                                <td style="width: 115.922px;">B&agrave;n L&agrave;</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">2</td>
                                <td style="width: 115.922px;">Đ&egrave;n Ngủ</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">3</td>
                                <td style="width: 115.922px;">M&aacute;y Sấy T&oacute;c</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">4</td>
                                <td style="width: 115.922px;">K&eacute;t Sắt Mini</td>
                                <td style="width: 106.25px;">0</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">5</td>
                                <td style="width: 115.922px;">&Aacute;o Tắm</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">6</td>
                                <td style="width: 115.922px;">&Aacute;o Ngủ</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                <td style="width: 59.8281px;">7</td>
                                <td style="width: 115.922px;">M&oacute;c &Aacute;o Quần</td>
                                <td style="width: 106.25px;">1</td>
                                </tr>
                                <tr>
                                    <td style="width: 59.8281px;">8</td>
                                    <td style="width: 115.922px;">Gi&#432;&#7901;ng</td>
                                    <td style="width: 106.25px;">2</td>
                                </tr>
                                </tbody>
                                </table>'
            ],

        ]);
    }
}
