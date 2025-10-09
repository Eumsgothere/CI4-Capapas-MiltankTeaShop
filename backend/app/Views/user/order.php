<?= view('components/header'); ?>

<style>
    html,
    body {
        height: 100%;
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background: #fcebb7;
        color: #2f2f2f;
        display: flex;
        flex-direction: column;
    }

    main.menu-page {
        flex: 1;
        /* This makes the main content expand to fill space */
    }

    .order-container {
        max-width: 800px;
        margin: 2rem auto;
        padding: 0 1rem;
    }

    h1 {
        text-align: center;
        color: #e36fa4;
        margin-bottom: 1rem;
    }

    .order-list {
        background: #fff;
        border-radius: 12px;
        padding: 1rem;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        margin-bottom: 2rem;
    }

    .order-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 0.5rem;
    }

    .total {
        font-weight: bold;
        margin-top: 1rem;
        text-align: right;
        color: #e36fa4;
    }

    .btn-confirm {
        display: block;
        width: 100%;
        padding: 0.8rem;
        background: #e36fa4;
        color: #fff;
        text-align: center;
        font-weight: bold;
        border-radius: 8px;
        text-decoration: none;
        transition: background 0.2s ease;
    }

    .btn-confirm:hover {
        background: #d45b93;
    }
</style>
<title>Miltank Tea Shop - Order</title>
<main class="menu-page">
    <div class="order-container">
        <h1>Your Order</h1>

        <?php $session = session(); ?>
        <?php $orderItems = $session->get('order') ?? []; ?>

        <?php if (empty($orderItems)): ?>
            <p style="text-align:center;">
                Your order is empty. Go back to the <a href="/menu">menu</a> to add items.
            </p>
        <?php else: ?>
            <div class="order-list">
                <?php $total = 0; ?>
                <?php foreach ($orderItems as $item): ?>
                    <div class="order-item">
                        <span><?= esc($item['title']) ?></span>
                        <span><?= esc($item['price']) ?></span>
                    </div>
                    <?php
                    $price = (float) preg_replace('/[^\d.]/', '', $item['price']);
                    $total += $price;
                    ?>
                <?php endforeach; ?>
                <div class="total">Total: ₱<?= number_format($total, 2) ?></div>
            </div>

            <a href="/confirm-order" class="btn-confirm">Confirm Order</a>
        <?php endif; ?>
    </div>
</main>

<?= view('components/footer'); ?>