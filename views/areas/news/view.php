<?= $this->template('news/list/' . $this->select('layout')->getData() . '.php', [
    'news' => $this->news]
); ?>
