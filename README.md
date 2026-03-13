# 🎰 BagRoulette — Bags.fm Hackathon 2026

> A fee-sharing roulette platform built on Bags.fm + Solana

## What is BagRoulette?
Route your token's trading fees to @BagRoulette. Every hour, one random holder wins the accumulated jackpot. Zero setup. Fully on-chain. Provably fair.

## How it works
1. Creator launches token on Bags.fm
2. Add @BagRoulette as fee recipient (any %)
3. Every hour — 1 random holder wins the jackpot
4. Prize sent on-chain automatically

## Tech Stack
- **Frontend**: Next.js 14 + Tailwind + Solana Wallet Adapter → Vercel
- **Backend**: Laravel 11 + PHP 8.4 → VPS
- **Blockchain**: Solana via Helius RPC + Bags.fm API
- **WebSocket**: Laravel Reverb
- **Database**: MySQL + Redis

## Live Demo
- Frontend: https://bagroulette.vercel.app
- API: http://136.243.19.223/api/v1

## Structure
\`\`\`
bagroulette/
├── frontend/     # Next.js app
└── backend/      # Laravel API
\`\`\`
