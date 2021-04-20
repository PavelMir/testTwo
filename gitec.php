<?php
1. Пишем первый код - индекс - комитт
commit 8cdb19cf833ea98491ff7a7cc7d69c4059de1d84 (HEAD -> master)
2.Меняем код - индекс - коммит
8.Переключились на мастер
commit 5038f1cecd030943f31b7bb299f5029a3d8fa957 (HEAD -> master)
Author: PavelMir <mironpavel123@gmail.com>
Date:   Tue Apr 20 00:27:44 2021 +0300

    second master commit

commit 8cdb19cf833ea98491ff7a7cc7d69c4059de1d84
Author: PavelMir <mironpavel123@gmail.com>
Date:   Tue Apr 20 00:25:48 2021 +0300

    first master commit
9.Делаем еще один коммит и создаем ветку stashed branch
git checkout -b stashed_branch

10.На ветке stashed_branch, делаем пару коммитов и потом переходим на мастер и сначала замерджим ту
ветку, а потом за-stash-им эту
?>