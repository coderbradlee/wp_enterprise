<?php
/*
  Plugin Name: 小工具/自定义排版导入导出备份工具
  Description: 一个可以将你的小工具数据进行导入导出的工具，WEB主题公园（http://www.themepark.com.cn）提供汉化，版权归作者 Kevin Langley, Sean McCafferty, Mark Parolisi所有。
  Author: Voce Communications - Kevin Langley, Sean McCafferty, Mark Parolisi
  Author URI: http://vocecommunications.com
  Version: 1.5.0
 * ******************************************************************
  Copyright 2011-2011 Voce Communications

  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * ******************************************************************
 */

require( dirname(__FILE__) . '/class-widget-data.php' );
add_action( 'init', array( 'Widget_Data', 'init' ) );