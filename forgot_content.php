<?  /* Copyright (C) 1995-2020  John Murtari
This file is part of FLY flight management software
FLY is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

FLY is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with FLY.  If not, see <https://www.gnu.org/licenses/>. */ ?>

Just give us the email address you used to register and we will
email you a link with a temporary login so you can reset your password.


    <form method='post' action='forgot.php'>

      <table cellpadding = '10'>
        <tr>
          <td>
            Email address:
          </td>

          <td>
            <input type='text' name='emailAddr' size='60'>
          </td>

        </tr>

        <tr>
          <td colspan='2'>
            <input type='hidden' name='action' value='edit'>
            <input type='submit' value='Send reset password link'>
          </td>
        </tr>
      </table>



    </form>



