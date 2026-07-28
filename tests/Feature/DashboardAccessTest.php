<?php

test('guests are redirected to login when visiting the dashboard', function () {
    $response = $this->get('/dashboard');

    $response->assertRedirect(route('login'));
});
