/** @type {import('next').NextConfig} */
const nextConfig = {
  output: 'standalone',
  images: {
    domains: ['cdn.simpleicons.org', 'localhost', 'paddle-billing.vercel.app', 'azurewebsites.net'],
  },
};

export default nextConfig;
