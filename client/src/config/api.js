import axios from 'axios';

const api = axios.create({
  baseURL: '/api',  // Changed to relative path since API will be in public folder
  headers: {
    'Content-Type': 'application/json',
  }
});

api.interceptors.request.use((config) => {
  const token = localStorage.getItem('token');
  if (token) {
    config.headers.Authorization = `Bearer ${token}`;
  }
  return config;
});

export default api;
