# BootcampArkademy

# Jawaban Soal 1

Kegunaan JSON pada REST API : JSON sebagai format untuk bertukar data client dan server atau antar aplikasi.

# Jawaban Soal 2

SELECT chsr.name as Cashier, prd.name as Product, ctgr.name as Category, prd.price as Price, prd.id_cashier as id_cashier, prd.id_category as id_category
from product as prd
inner join Category as ctgr on prd.id_category = ctgr.id inner join Cashier as chsr on prd.id_cashier = chsr.id");
