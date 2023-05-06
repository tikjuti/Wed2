<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


</head>

<body>
  <?php
  require("view/slide/mid_phone_slide.php");
  ?>
  <?php
  foreach ($array as $item) {
    ?>
    <div class="container content-phone"> <a href="#">Trang chủ</a>><a href="#">Điện thoại</a></div>

    <div class="container content-phone product-p">
      <div class="row justify-content-around">
        <div class="col-xs-6 ">
          <div class="content-phone-img">
            <img class="phone-img pb-3 pt-3"
              src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBISERgSERURERISERERERIREhEREREQGBQaGRgUGBgcIy4lHB4rHxoYJjgmKy8xNTU2HCQ7QDszPy40NTEBDAwMEA8QHBISHjQhISE0NDExNDQxNDQ0NDExMTE0NDE0NDQ0NDE0MTQ0NDQ1MTQ0MTE1NDQ0NDQxNDQ0NDE0NP/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAABBAMBAAAAAAAAAAAAAAAAAgMEBQEGBwj/xABNEAABAwIBBQcQCAQEBwAAAAABAAIDBBEhBRIxUWEGBzRBcXKxExQiMjNSVHN0gZGTobKz0RYXI0JTwdLTFSRikpSiwsNDY2SCo+Hw/8QAGQEBAQEBAQEAAAAAAAAAAAAAAAECAwQF/8QAJREBAQACAgEEAgIDAAAAAAAAAAECEQMSIQQxQVETIgVxMoGx/9oADAMBAAIRAxEAPwDsyEIQYVRl7LkdIwF3ZPd3Ng0u2nUNqtyuQ5br3VFS9+JznmOMd6xpt0gm/JqVk2sTKvdBVzuxkcwH/hw4NtqJ0nlwUR4lPbvkHH2c72+wuWs5Wy6IrxxuLWtwe9ps950GztIbfRbStc+kbQcIgRfElwufYelb8Rdx0fNk/Ef/AIp36krMf+I7/FO/UtOoMoRTg5gzXgXcx2m2sa1Js3UFZJTbaQyT8R/+Kd+pKcyQC5dNbWJpHD0hyqsh5GFS7E5jAc24AuTp49CXljJr6N4dE92bfNvoN9NjbAgp43pVi0E/fm9dL+pKzHd/N66X9Sh5NrxM03AbIy2eBgHDvwOlTXOsE0IWUa1tOwvklla1tseqykknQ1ozsSccNnEqPJ9Tlauu6hifHCTbq08heDb+p5zTj3rUQ0P8Sys2lkJ63pmGSdoJGcQGl4w4y4tZfA2C7BFG1jQxjWsYxoaxjQGta0CwaAMAArjj2bw4+3n4cwO5PL501sI2dVkFvMI7JP0Ry94bD66X9tdRcUhz10nFi7z0+LmH0Sy74bD66X9tJO5TLo010HnmlH+hbtutqZmUE76a/VWxEtLb5zRcZ7m24w3OI5F55keXElxJcTckk3JOkklc88ZjdOXLjjhdarp/0Wy54dB6+X9CPotlzw6D18v6Fy3BJWNz6ct4/Tqw3JZe8Nh9dL+2lfRHL3hsPrpf21X70lVMKqSJpe6m6iXPBuWNkzm5rhxBxxG0X1Ydca5dcOOZTb0cfFjljvy5oNyGXr3FbDfx0v7aV/Dt0lL2bJm1FsS1kjXG3I4NJ5Biumtclgq3ii30+LUdxm+V1eXrWvaaeovmi4LQXDS0g4g7D7V01cj308gtkpuvohm1FMWuc9os58WcBidbSQQdQK3Te8yyazJ0Ujjd4bmP5W4X9IPoXDLHrdPLnj1um0oQhZZCEIQCEIQMVY+zfzHe6VxN05zHSfeEMjwf6yDj6Su2VYvG8HQWPvyZpXCnn7J/kzlrFY0HKjyXbLu9mA9iVBQhzGuzm3cJCRezmhoBvqxuABp/J3KFNfEcoO3jCr+pvGFneYXHpCe18pT+TJTHOwtOh9uUca3HP6StTydTEPDnaRoGratlprHtjmtALnu1NGJKsVfZCy+aRxzmdUjcQbA2c1w4wUZfy+atwzWdTjab2Ju5ztZWry7qZWnNpGMhYMM9zQ+R+0k9CVBurkJDa1jJ4jgXtaGTM2tcOg4FNzeza4yRNm1DNTrsO0EfOy2GqPYOt3p6FrTIhHUxlrs9j8ySN+jPY7Qdh4iNi2Sc9geQrSxG3s7OyllB/H1QtB1NMzsP8o9C6S5y5lvXYV1f4y3m6q9dFlkXbix3Ht4Md4wpz0w6VMSzqHJUr148b2Y4Jr5lUy5IonOLnU1M5xNyTBESTrOCw+qTD6rauk4ZfeNXjl94X/BaHwWl9RF8lkZFofBaX1EXyUc1e1ZbV7VfwY/R+LD6i4o4ooW5sLGRNve0bWsbfXZo0qYyVULKpSo6lS8WjpPhdMkUhj1TxVCmxSrhlhpzyxNbqGh2T6oHjpKj4blS7xjycnyDvZjbz3KuN0Lr0NT5JUfCcqTeKH8jKf8AnAewrxc08vneomso6ihCFxecIQhAIQhAzVdzdzHe6VwZx+yf5M5d5qu5u5jvdK4I932T/J3LWKxQFlwmzSC/EDxC4B9Cj11ZmCzdOjlPyVcJpuJxA1CwHoVtReMizdItyiyxXvPUHgam3tqUHJ9eScx/mOi3m4lOcbXBFwcHBXe4qopswg5xtYNzeS+JA4zbi5U5U5gaACCS059r22aeP5Ilya8YstI3it2w2WTtLkeRxvKRFH94u7YjUG6SVN+NaZ15bFkZx62pC7SJJw2/eZzf9RctplPYHkK1SGcOkY1gLY2ZscbTiQwcZ/qJuStptnMtrwV+G4h72rrV1f4z/det5qZ1z/cA/NrK7xp+K9bRWVS+h6TDtjK+j6WfpDlRVKvmq1CqapVs1Wvo48enr7SLKSrUd9WqmSqUd1UtajF5IujVpTatUHXSy2qV8J+WNkZVqXFV7VqzKpS4qpTrK1M422CqVlTVK0+CqVrS1a5Z8a2yr7Lct6Kp8kqPhuVfvE8Bl8cOgrGVZ70dR5LP8NyzvFcBl8cOgr5Hq8euUfN9XP2jqCEIXkeQIQhAIQhAzV9zdzH9BXAZO5kd9C8Dltdd+q+5u5j+grguYSwW0gYLWKxodf24J0Zzum/QpkFTFnxFzLsYJM+2aC8kHNxto7XDl0XT+U6OxOHYn2fJVZpNTiBzb/mr5lZs2IzeYFugG9+QaVdOKr6WENOHnJ0lTgEikvcG8uzBLieHcu3FM1EZOLdOiyXSQOvoJccA0dkT6E87FhQ90bsNyttD7MB1AFUOT6IggHtiQX2xDGj7t9evzK+e24zddgtNRSbj5M2srvHO+K9XFdVLWcgTZtZWDXJIfRK75qTXVWJX2fQYz8Mv9/8AXt4c+uELqKpV0tSos9SoMlQvTlnImXMmvqUy6oVe+dNmZebLnkccuZY9cLIqFV9VWRKsT1EZ/LVwyoUmOpVC2ZPsnXbHmlbx5mywVStaSqWoQ1Ks6WqXoxymT0Y8zb62pvSTeTze45W+8TwKXxw6CtPqKn+Wm8RL7pW37xXAZfHDoK+R/JY6zn9OHqcu1jqKEIXzXlCEIQCEIQR6sgRvJwGY7oK4XTHsByLt+V+DyeLd0Lh9MexC1isYnpWv06VAfkZpOAb0K1BSgVppVQ5KzdDYzzhfpUjrM95D/Y35KeCsgqppAFCe8h9W35J6KkcMLtYDpEbWsvy2UsFKBRWYIwwWCcJxHOHSkArD32x1EHVxoNIo5syuqRrfOP8Ay3WaypxVdVy5tdKf+onafO9wSKiW5X1fQ8knDZ9VJlqaEsyiukSXvTRK483Ozctll6QXJJKwvHlyWoXnIzkhCx3ocDk416YWQV0x5bBOjlU2nqFUNKfjevpcHM1MrGx1FXank2sLf7ux/NdL3i3DrKQXFzLcDjsL36R6VxmrqPss3vnD0DH5Lr28Xwd/LJ7zF5P5HPtyyfUXLLs6yhCF89kIQhAIQhBCytweTxbuhcLpz2IXdMrcHk8W7oXCID2IWsViQClhyZBSgVpo8CsgpkOSg5A8ClByaBWQUD10aSBrcB7U2HLLD2Tec3pQc1yzwqbyib3ymi+4v6eVOZa4VN5RN8QqNE4XsdB49R1rfFyXC2fFYYcUglOysLTY6fYRxEbEypnldoEIQuW1CEIUAsrCFqUKCeYUwFIIzW3Olw7EbNfyXo48+vn6Qid9zbiGC7bvF8Hfyye8xcMXc94vg7+WT3mLhnlcsrb8q6yhCFgCEIQCEIQR61odE8HEFjrjzLgEB7EL0DV9zdzH9BXnuE9iFrFYfBSg5NArIctKeDkoFMgpQKBwvAFyQBrJsE1UTksPUiHOwAzSDa5xPoVPlKcukLfutwA28ZUO6G1/kwMjBaXsdI83cA4E31bVOe6wuNIx861emi6pI1mi5xOoDErZH4NtjgAMTc+lBz7LXCp/KJvfcoKnZb4VP5RN77lBXNlNp5mOAZLcN+7IMXRnaPvN2adWpYrKF8Vs4AtcLse05zHjW08fJpHGoan0OU5IbgZr2ON3xSND4nnWWnj2ix2rXbc1V/tAQrwR0E+h0lC/vXB1RTE7HDs2+cP5Uobl53H7B1NUi1/sKmFzvVuIePO1TRqqFCunbl8oA26zqzbjbTyvHmIBBShuUrs3OfC6FukuqHx0wA1nqhbZNU1VGlsYSQACSTYAYknUFdHI9PFjUVcROB6nSA1Mh1jOwjHLnHkTcmVmRjNo4+oYEGZzuqVLho7ewDL6mgcpST7NfZl9M2AXmsZbXbBxs1GTVzdOu3HXyPLnEk3JxJWHOubnEnEk43KSrb8T2KF3neKYOs5HW7IS5oOw4kewLgy73vEcBl8cOgrKOooQhAIQhAIQhAzVdzdzHe6V54iPYheh6rubuY73SvO0RwC1isPApQKaBSgVpTgKUHJoFKBQU+UG2kd/VZw8/wD7uot1dVtN1RuGDh2p/IqCzJsh0lrfPc+xER4Jix4ePum9tY4wtiZKHsDhcBwuAdKposmvLuzsG8ZBvcagrg4AAYAWAGoIsaLlrhU/lE3vuUFTctcKm8om+IVCXNkKdQ5NkmuWhrWN7eWRwZEznOOF9gx2Ip4GNAkmvmntWNNnSEbfut1n0bE1le+WwdYMaLMjYM2Ng/pH56TrVE4Gih0h9a/jsXU9MDbi++//ACLP0jkZbqEdLTgC32dNE9398gc/2qkQmxdndXlDiqp27GvLR6BgsO3UVjhaSRsoOkTRQTg/3tKpUJui7/ilNJwilYwm32lI50DhtzDnMPmDeVIfklrwXUkgqABcxFvU6lg0m8dznAa2l3mVOlseQQQSCCCCDYgjQQUCEKzdUtqMJiGy6Gz6A/UJbaedp13VfLG5ji1ws4GxBUCF3veH4DL44dBXBF3veH4DL44dBQdRQhCAQhCAQhCBmq7m7mO90rznEcF6Mqu5u5jvdK84RnBaxWHrrN0gFZBWlOArIKbBWboHQVkFNArN0DwKHHpCbBQT0jpQaXlvhU/lE3vuUeBo7Z2IHFrPEFIyzwqbyib3ykTR2aG6tPO41Mcd1i3RmaQvN3afYBxAagmlkhYUsUIQhZAhCEAhCEApWdntDT2zR2J4yO9+XoUUJ6JuK3jjtKZXe94jgMvjh0FcMqWWN+J2Pn4//tq7nvEcBl8cOgrNmrpZdx1FCEKAQhCAQhCBmq7m7mO90rzcw4L0jVdzdzHe6V5sacPStYrDt1m6aulgrSl3WQUi6zdA4Ci6bulAoHLovo5R0pAKzfRyjpQa1UxZ9fKNVRO4+Z7j02RVRqfSRZ1fUnvZKg+mWyXWUy7ceP67efPL9tNcexMkK0lgUV8KxlHTGolkJ90aQWLn1XZtCXmLOYppTayAnBGltiVmKbNtYpUEaXHCp1NTrrhGMqj1sH2Wd3rgfMcPkux7xHAZfHDoK5pVUt6eTYwu/tId+S6ZvE8Bl8cOgrPNNZf6OK7ldRQhC4ugQhCAQhCBmq7m7mO90rzUw4enpXpWr7m7mP6CvNLNHp6VrFYXdZSVm60rN1m6TdZQLBWbpu6yCgcus3xHKOlNgpQOI5R0oMZChzq2sOqSQemV3yU6spNizuPjzqyu8afivWwVdHsXo4/8Hj5L+9aPPSqG+lW2z0OxQZaLYsZR0xrWHUybNOthfR7E06k2LOm5VF1sgUyuutNiyKTYppdqdtMnmUytm0mxSI6NWRLVVFSKypqRT4aLYrOmoti64xyzqurKa1NL4iT3Stx3iOAy+OHQVVZTpbUk3k83uFWu8RwGXxw6CuXP7xeD2rqKEIXB3CEIQCEIQM1fc3cx/QV5nYcPT0r0xV9zfzHe6V5mafz6VrFYXdZBSLrIKql3Qk3WbqhV0XSbrN0CgUNOI5w6Um6y04jnN6UF/vex51bX7JP9163aek2LU97Bt67KHjB8WRdGfTrpjlqPNyY7y21Oei2KBLQ7FuElKoslHsVtSRpz6HYmXUOxbc+i2KO6h2LLW2rdZbFkUOxbL1jsSm0OxDbXWUOxSY6HYr5lDsUiOi2LSKaGi2Kxp6PYrOOkUuOmTszZtQ5bp7UdRspZ/huTW8RwGXxw6CrndDFahqfJKj4TlTbxHAZfHDoK5cl3XTimpXUUIQubqEIQgEIQgj1ZtG8nAZjr+grzO38z0r0zWdzfx9g/DX2JXmmSMtc5p0te5p5Q4haxWEoQhVWbrN0lCBV1lJRdULuhpxHOb0pN0l780Z2rsvRioN03p8a7KHPBHJ1WRdQLFzLerAblLKDML59wNbRM/H/MPSupWSVzsRnRJp0Cm2SS1XbPVXupkg0qsyxJzU2dVZ1qsilVlmozU2dVe2mTradTAxZDU2dUZsKeaxOBqUApteqp3TN/kKrySp+E5azvEH+SlHH1YdBWz7q3BuTqonipKn4Tlre8Uy1BIe+mw5BcfNStR09CELKhCEIBCEIMELz3uvyU6krZIyCGveZIzjZzXG59t/YvQq1/dVuYiyhFmv7CRuMcg0tOo6xsVlHAELYcsbja2lJzmdUjB7qwtzbcVwTgdmKpjQT/AIUp5I3kdC00joT/AFjP+DN6t/yR1jP+DN6t/wAkDCE/1jP+DN6t/wAkdYz/AIM3q3/JAzdYcLhP9Yz/AIM3q3/JZ6wn/Bm9W/5IJmQcsihynHWP4PVsMVQ4AnNcc0POyz2tfbE5p2rujJGuaHNIc1wDmuaQWuaRcEEaQVwHrOUtLJIJnxPIL2dTe1zXDQ9jrdi4egjA8RErI9flOgGZRzCSEXcKepaGFl8e0ktbTiWOIvdRmx3ZYXITvg5aaLuo6Ugfe6lPbluJLLP1g5b8Bg9VU/uImq66sLkf1hZb8Bg9VU/uI+sLLfgMHqqn9xNmnXELkf1hZb8Bp/VVP7iPrBy34DB6qp/cTZp1xZXIvrBy34DB6qp/cR9YOW/AYPVVP7iGnXVlch+sLLfgNP6qp/cWRun3Q1f2cMMMDnfejYA4D/vc63LZDS932d0LYaU0Ubs6pqs1pY03cyDOBJI/qIzQOMF2pbVvc5GNHk6KN4s9zc9/K7G3tK1ncbvaujm68yi8z1GdngOcX9l3znHEnl9i6gApVZQhCgEIQgEIQgEIQgQ/QeRU0ulCFVNJKEIMLCEIG3duORMP0nlKEIFDi5p6CpDEIQodxpt2gc78ysoQGvlH5JxCEGQhCERkLIWUIpTVaUXalCEEoLKEKIEIQgEIQg//2Q==">
          </div>
        </div>
        <div class="col-xs-6">
          <div>
            <form method="POST" action="index.php?control=giohang&action=addcart&idsanpham=<?php echo $item['MaSP'] ?>">
              <h2 style="text-align:center">
                <?php echo $item['TenSP'] ?>
              </h2>
              <br>
              <b style="font-size:18px">Dung lượng: </b>
              <?php echo $item['DungLuong'] ?>
              <br>
              <b style="font-size:18px">Camera: </b>
              <?php echo $item['Camera'] ?>
              <br>
              <b style="font-size:18px">Chip: </b>
              <?php echo $item['Chip'] ?>
              <hr color="black">
              <p class="price">Giá:
                <?php $item['GiaSP'] ?>VND
              </p>

              <p class="price">
                Số lượng còn lại:
                <?php echo $item['SoLuongSP'] ?>
              </p>
              <div class="price">Số lượng:
                <div class="buttons_added">
                  <!-- <input class="minus is-form" type="button" value="-"> -->
                  <input type="number" min="1" max="50" require="" value="1" name="sl">
                  <!-- <input class="plus is-form" type="button" value="+"> -->
                </div>
              </div>
              <hr color="black">
              <input class="btn btn-primary d-flex justify-content-center" name="themgiohang" type="submit"
                value="Mua hàng">
              <input class="btn btn-primary d-flex justify-content-center" name="masp" type="hidden"
                value="<?php echo $item['MaSP'] ?>">
              <input class="btn btn-primary d-flex justify-content-center" name="tensp" type="hidden"
                value="<?php echo $item['TenSP'] ?>">
              <input class="btn btn-primary d-flex justify-content-center" name="dungluong" type="hidden"
                value="<?php echo $item['DungLuong'] ?>">
              <input class="btn btn-primary d-flex justify-content-center" name="camera" type="hidden"
                value="<?php echo $item['Camera'] ?>">
              <input class="btn btn-primary d-flex justify-content-center" name="chip" type="hidden"
                value="<?php echo $item['Chip'] ?>">
              <input class="btn btn-primary d-flex justify-content-center" name="giasp" type="hidden"
                value="<?php echo $item['GiaSP'] ?>">
              <input class="btn btn-primary d-flex justify-content-center" name="soluongsp" type="hidden"
                value="<?php echo $item['SoLuongSP'] ?>">

            </form>
          </div>
        </div>
      </div>
      <?php
  }
  ?>
  </div>
</body>

</html>